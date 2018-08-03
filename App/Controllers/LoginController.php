<?php 

namespace App\Controllers;

use App\Models\User;

use App\Controllers\ProductController;

class LoginController
{
    
    public function index()
	{
	  if(isset($_SESSION['user']['id'])){
          
          redirect('/home');

	  }
	   view('account/login');
	}

	public function login()
	{

	   $username = $_POST['username'];
	   $password = sha1($_POST['password']);

	   // echo $username;
	   // echo '<br>';
	   // echo $password;
	   $user = new User();

	   $userinfo = $user->checkUser($username, $password);

	   $home = new ProductController();

   	   if(empty($userinfo)){
          
          echo 'sorry you are not ok to in';
		
		} else{

		   $_SESSION['user']['id'] = $userinfo['id'];
		   $_SESSION['user']['username'] = $userinfo['username'];

		   $home->index();
		}
	}

	public function logout()
	{
		if(isset($_SESSION['user']['id'])){
		unset($_SESSION['user']['username']);
		unset($_SESSION['user']['id']);
		unset($_SESSION['cart']);

		redirect('/user/register');
	    }

	   redirect('/home');
	}

	public function signup()
	{
		$username = $_POST['username'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = sha1($_POST['password']);
		$role = 'customer';

		$data = [
				'email'  =>  $email,
				'password'  => $password,
				'username' => $username,
				'fname' => $fname,
				'lname' => $lname,
				'role' => $role
			];


		$user = new User();

		$user->signup($data);

		view('account/login');
	}
}