<?php

class RoomController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Room Controller
	|--------------------------------------------------------------------------
	*/

	public function index($id)
	{
		$room = Room::find($id);

		if(Auth::user()->id != $room->church->user_id) {
			Session::flash('warning', 'U heeft niet genoeg bevoegdheid om deze zaal te bekijken');
			return Redirect::to('/');
		}

		return View::make('rooms.overview')->with('room', $room);
	}

	public function showCreate()
	{
		return View::make('rooms.create');
	}

	public function store()
	{
		$user_id	= Auth::user()->id;
		$church 	= Church::where('user_id', '=', $user_id)->first();
		$room_count	= Room::where('church_id', '=', $church->id)->count();

		if(!($room_count < $church->room_limit)) {
			Session::flash('error', 'U heeft het limiet van '.$church->room_limit.' zalen bereikt.');
			return Redirect::to('room/create');
		}

		$room 		= new Room();
		$messages	= array
					(
						'roomname.required'		   	=> 'De zaal naam moet ingevuld zijn.',
						'number_of_people.required'	=> 'Het maximaal aantal personen moet ingevuld zijn',
						'number_of_people.integer'	=> 'Het maximaal aantal personen moet een geheel getal zijn'
					);
		$validation = Validator::make(Input::all(), $room->rules, $messages);

		if(!$validation->fails()) {
			$room -> roomname			  = Input::get('roomname');
			$room -> room_description 	  = Input::get('room_description');
			$room -> number_of_people	  = Input::get('number_of_people');
			$room -> min_price	  		  = Input::get('min_price');
			$room -> max_price			  = Input::get('max_price');
			$room -> church_id	  		  = $church->id;
			$room -> created_at			  = date('Y-m-d H:m:s');
			$room -> updated_at			  = date('Y-m-d H:m:s');

			if($room->save()){
	        	Session::flash('success', 'De nieuw zaal "'.$room->roomname.'" is succesvol opgeslagen');
	        	return Redirect::to('church');
	        } 

	        return Response::error('500');

		} else {
			return Redirect::to('room/create')->withErrors($validation)->withInput();
		}
	}

	public function delete($id)
	{
		$room = Room::find($id);
		$roomname = $room->roomname;

		if(Auth::user()->id == $room->church->user_id) {
			$room->delete();
			Session::flash('success', '"'.$roomname.'" is succesvol verwijderd.');
			return Redirect::to('church');
		} 

		Session::flash('warning', 'U heeft niet genoeg bevoegdheid om deze zaal te verwijderen.');
		return Redirect::to('church');
	}

	public function updateRoom($id)
	{
		$user_id	= Auth::user()->id;

		$room 		= Room::find($id);

		$roomname			= Input::get('roomname');
		$room_description	= Input::get('room_description');
		$number_of_people	= Input::get('number_of_people');
		$min_price			= Input::get('min_price');
		$max_price			= Input::get('max_price');

		$messages	= array 
					(
						'roomname.required'		   	=> 'De zaal naam moet ingevuld zijn.',
						'number_of_people.required'	=> 'Het maximaal aantal personen moet ingevuld zijn',
						'number_of_people.integer'	=> 'Het maximaal aantal personen moet een geheel getal zijn'
					);

		$input 		= array 
					(
						'roomname'			=> $roomname,
						'room_description'	=> $room_description,
						'number_of_people'	=> $number_of_people,
						'min_price'			=> $min_price,
						'max_price'			=> $max_price
					);

		$validation = Validator::make($input, $room->rules, $messages);

		if(!$validation->fails()) {
			$room -> roomname			= $roomname;
			$room -> room_description	= $room_description;
			$room -> number_of_people	= $number_of_people;
			$room -> min_price			= $min_price;
			$room -> max_price			= $max_price;
			$room -> updated_at			= Date('Y-m-d H:m:s');

			$room->save();

			Session::flash('success', 'De zaalgegevens van "'.$room->roomname.'" zijn succesvol opgeslagen');
			return Redirect::to('room/'.$id);
		} else {
			return Redirect::to('room/'.$id)->withErrors($validation);
		}
	}

}