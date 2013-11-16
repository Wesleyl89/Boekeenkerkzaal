<?php

class ChurchController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Church Controller
	|--------------------------------------------------------------------------
	*/

	public function index()
	{
		$user_id	= Auth::user()->id;
		$church 	= Church::where('user_id', '=', $user_id)->first();
		$rooms		= Room::where('church_id', '=', $church->id)->get();

		return View::make('churches.overview')->with('church', $church)
											  ->with('rooms', $rooms);
	}

	public function updateChurch($id)
	{
		$church 	= Church::find($id);

		$churchname 		= Input::get('churchname');
		$church_description	= Input::get('church_description');
		$address			= Input::get('address');
		$zipcode			= Input::get('zipcode');
		$city				= Input::get('city');
		$email				= Input::get('email');
		$website			= Input::get('website');

		$input		= array
					(
						'churchname' 		 => $churchname,
						'church_description' => $church_description,
						'address'	 	     => $address,
						'zipcode'	 	     => $zipcode,
						'city'		 	     => $city,
						'email'		 	     => $email,
						'website'	 	     =>	$website
					);

		$messages	= array
					(
						'churchname.required' => 'De kerk naam moet inguvld zijn.',
						'address.required' 	  => 'Het adres moet ingevuld zijn.',
						'zipcode.required'    => 'De postcode moet ingevuld zijn.',
						'zipcode.max'		  => 'De postcode mag maximaal maar 7 tekens bevatten. (Formaat: 1234 AB)',
						'city.required' 	  => 'De plaats moet ingevuld zijn.',
						'email.email'		  => 'Het email-adres is niet geldig.'
					);

		$validation = Validator::make($input, $church->rules, $messages);

		if(!$validation->fails()) {
			$church -> churchname 		  = $churchname;
			$church -> church_description = $church_description;
			$church -> address 	  		  = $address;
			$church -> zipcode 	  		  = $zipcode;
			$church -> city 	  		  = $city;
			$church -> email 	  		  = $email;
			$church -> website	  		  = $website;
			$church -> updated_at 		  = date('Y-m-d H:m:s');

			$church->save();

			Session::flash('success', 'De algemene kerkgegevens zijn succesvol opgeslagen');
			return Redirect::to('church');
		} else {
			return Redirect::to('church')->withErrors($validation);
		}
	}

	public function updateServices($id)
	{
		$service 	= Service::where('church_id', '=', $id)->first();

		$catering_license 	= Input::get('catering_license');
		$catering 			= Input::get('catering');
		$handicap_services 	= Input::get('handicap_services');
		$parking		 	= Input::get('parking');
		$wifi 				= Input::get('wifi');
		$furniture_movable	= Input::get('furniture_movable');
		$stage				= Input::get('stage');

		$service-> catering_license	 = $catering_license;
		$service-> catering 		 = $catering;
		$service-> handicap_services = $handicap_services;
		$service-> parking 		     = $parking;
		$service-> wifi 		 	 = $wifi;
		$service-> furniture_movable = $furniture_movable;
		$service-> stage	 		 = $stage;
		$service-> updated_at		 = date('Y-m-d H:m:s');

		$service->save();

		Session::flash('success', 'De voorzieningen zijn succesvol opgeslagen');
		return Redirect::to('church');		
	}

	public function updateAttributes($id)
	{
		$attribute 	= Attribute::where('church_id', '=', $id)->first();

		$microphone		 	  = Input::get('microphone');
		$wireless_mic		  = Input::get('wireless_mic');
		$audio_induction_loop = Input::get('audio_induction_loop');
		$recording		 	  = Input::get('recording');
		$mixers				  = Input::get('mixers');
		$beamers	 		  = Input::get('beamers');
		$screens			  = Input::get('screens');
		$tv					  = Input::get('tv');
		$printing			  = Input::get('printing');

		$attribute -> microphone		   = $microphone;
		$attribute -> wireless_mic 		   = $wireless_mic;
		$attribute -> audio_induction_loop = $audio_induction_loop;
		$attribute -> recording	     	   = $recording;
		$attribute -> mixers 		 	   = $mixers;
		$attribute -> beamers			   = $beamers;
		$attribute -> screens	 		   = $screens;
		$attribute -> tv	 		 	   = $tv;
		$attribute -> printing	 		   = $printing;
		$attribute -> updated_at		   = date('Y-m-d H:m:s');

		$attribute->save();

		Session::flash('success', 'De beeld & geluid attributen zijn succesvol opgeslagen');
		return Redirect::to('church');		
	}
}