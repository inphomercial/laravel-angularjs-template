<?php

class AuthController extends BaseController {

	public function __construct() {
	}

	public function login() {
		if(Auth::attempt(array('email' => Input::json('email'),'password' => Input::json('password'))))
		{
			return Response::json(Auth::user());
		}
		else
		{
			return Response::json(array('message' => "Login Failed"), 401);
		}
	}

	public function logout() {
		Auth::logout();
		return Response::json(array('message' => "Logged Out"));
	}
}
