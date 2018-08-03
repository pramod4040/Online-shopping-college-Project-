<?php


namespace System\Library;

use System\Library\Database;

class Model
{
	public $db;

	public function __construct()
	{
		$this->db = new Database();
	}
}