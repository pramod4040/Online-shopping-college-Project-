<?php 

namespace App\Controllers\Admin;

use App\Models\User;

class LoginController
{
	public function index()
	{

		if($_POST){

			$username = $_POST['username'];

			$password = sha1($_POST['password']);

			$data = [
				'username' => $username,
				'password'	=> $password

			];

			$user = new User();

			$status = $user->adminLogin($data);

			if($status){

				$_SESSION['admin']['username'] = $status['username'];

				redirect('/admin/home');
           }
		
	}
	view('admin/login');
  }
	public function logout()
	{
		unset($_SESSION['admin']['username']);

		view('admin/login');
	}
}