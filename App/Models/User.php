<?php 

namespace App\Models;

use System\Library\Model;

class User extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function checkUser($username, $password)
	{
		$sql = " SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' AND role = 'customer' ";

		$userinfo = $this->db->find($sql);

		return $userinfo;

		// debug($userinfo);
		// die;
	}

	public function signup($data)
	{
		$sql = " INSERT INTO users (username, fname, lname, email, password, role)
		VALUES
		('{$data['username']}', '{$data['fname']}', '{$data['lname']}', '{$data['email']}', '{$data['password']}','{$data['role']}')";

		$status = $this->db->execute($sql);
	}

	public function adminLogin($data)
	{
		$sql = " SELECT * FROM users WHERE username = '{$data['username']}' AND password = '{$data['password']}' AND role = 'admin' ";

		return $this->db->find($sql);
	}
}