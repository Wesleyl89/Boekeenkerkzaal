<?php

class LoginController extends BaseController {

	public function login()
	{
		if (Auth::check()) {
            return View::make('home');
        }

        return View::make('login');
	}

	public function processLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		if(Auth::attempt(array('username' => $username, 'password' => $password))) {
			return Redirect::to('/');
		} else {
			Session::flash('login_error', 'Gebruikersnaam of wachtwoord fout.');
			return Redirect::to('/login');
		}		
	}

	public function logout()
	{
		if(Auth::logout()) {
			return Redirect::to('login');
		} 

		return Redirect::to('/');
	}

}