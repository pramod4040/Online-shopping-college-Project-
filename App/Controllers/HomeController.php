<?php

namespace App\Controllers;

class HomeController
{
	public function __construct()
	{


	}

	public function index()
	{
		include 'resources/views/home.php';
	}

	public function error()
	{
		view('error/sorry');
	}

	public function ramilo()
	{
		view('error/epic');
	}
	

}
