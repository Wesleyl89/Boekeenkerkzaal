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

		return View::make('churches.overview')->with('church', $church);
	}

	public function updateChurch($id)
	{
		$church 	= Church::find($id);

		$churchname = Input::get('churchname');
		$address	= Input::get('address');
		$zipcode	= Input::get('zipcode');
		$city		= Input::get('city');
		$email		= Input::get('email');
		$website	= Input::get('website');

		$input		= array(
								'churchname' => $churchname,
								'address'	 => $address,
								'zipcode'	 => $zipcode,
								'city'		 => $city,
								'email'		 => $email,
								'website'	 =>	$website
						   );

		$messages	= array(
								'churchname.required' => 'De kerk naam moet inguvld zijn.',
								'address.required' 	  => 'Het adres moet ingevuld zijn.',
								'zipcode.required'    => 'De postcode moet ingevuld zijn.',
								'zipcode.max'		  => 'De postcode mag maximaal maar 7 tekens bevatten. (Formaat: 1234 AB)',
								'city.required' 	  => 'De plaats moet ingevuld zijn.',
								'email.email'		  => 'Het email-adres is niet geldig.'
						   );

		$validation = Validator::make($input, $church->rules, $messages);

		if(!$validation->fails()) {
			$church -> churchname = $churchname;
			$church -> address 	  = $address;
			$church -> zipcode 	  = $zipcode;
			$church -> city 	  = $city;
			$church -> email 	  = $email;
			$church -> website	  = $website;
			$church -> updated_at = date('Y-m-d H:m:s');

			$church->save();

			Session::flash('success', 'De algemene kerkgegevens zijn succesvol opgeslagen');
			return Redirect::to('church');
		} else {
			return Redirect::to('church')->withErrors($validation);
		}
	}

}