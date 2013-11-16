<?php

class RoomController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Room Controller
	|--------------------------------------------------------------------------
	*/

	public function showCreate()
	{
		return View::make('rooms.create');
	}

	public function store()
	{
		$user_id	= Auth::user()->id;

		$room 		= new Room();
		$messages	= array
					(
						'roomname.required'		   	=> 'De zaal naam moet ingevuld zijn.',
						'number_of_people.required'	=> 'Het maximaal aantal mensen moet ingevuld zijn',
						'number_of_people.integer'	=> 'Het maximaal aantal mensen moet een geheel getal zijn'
					);
		$validation = Validator::make(Input::all(), $room->rules, $messages);

		if(!$validation->fails()) {
			$room -> roomname			  = Input::get('roomname');
			$room -> room_description 	  = Input::get('room_description');
			$room -> number_of_people	  = Input::get('number_of_people');
			$room -> min_price	  		  = Input::get('min_price');
			$room -> max_price			  = Input::get('max_price');
			$room -> church_id	  		  = Church::where('user_id', '=', $user_id)->first()->id;
			$room -> created_at			  = date('Y-m-d H:m:s');
			$room -> updated_at			  = date('Y-m-d H:m:s');

			if($room->save()){
	        	Session::flash('success', 'De zaal is succesvol opgeslagen');
	        	return Redirect::to('church');
	        } 

	        return Response::error('500');

		} else {
			return Redirect::to('room/create')->withErrors($validation)->withInput();
		}
	}

}