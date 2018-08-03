<?php

namespace App\Controllers;

class PageController
{
	public function contact()
	{
		view('pages/contact_us');
	}

	public function about()
	{
		view('pages/about_us');
	}
}