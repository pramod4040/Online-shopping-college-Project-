<?php

namespace App\Controllers\Admin;

use App\Models\Category;

class CategoryController
{
	private $category;

	public function __construct()
	{
		if(isset($_SESSION['admin']['username']) == 0)
		{
			redirect('/admin/login');
			die('You need to login first.');
		}
		$this->category = new Category();
	}
	public function index()
	{
		return $this->category->getData();

	}
}