<?php

namespace App\Controllers\Admin;

class DashboardController
{

	public function __construct()
	{
		if(isset($_SESSION['admin']['username']) == 0)
		{
			redirect('/admin/login');
			die('You need to login first.');
		}
	}
	public function index()
	{
		view('admin/dashboard');
	}


}