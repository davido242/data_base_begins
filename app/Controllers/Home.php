<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}


	public function help()
	{
		return view('welcome_message');
	}

	public function logs()
	{
		return view('login');
	}


	public function mail()
	{
		return view('send_mail');
	}

	//--------------------------------------------------------------------

}
