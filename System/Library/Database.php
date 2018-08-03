<?php

namespace System\Library;

class Database
{
	private $database;
	private $host;
	private $username;
	private $password;

	private $link;

	public function __construct()
	{
		$dbconfig = include 'config/database.php';
		$this->host = $dbconfig['host'];
		$this->database = $dbconfig['db'];
		$this->username = $dbconfig['user'];
		$this->password = $dbconfig['pass'];

		$this->connect();
	}

	private function connect()
	{
		$this->link = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}

	public function query($sql)
	{
		$res = mysqli_query($this->link, $sql);

		//debug($res);

        $data = [];
		while( $row = mysqli_fetch_assoc($res))
		{
			$data[] = $row;
		}

		return $data;

	}

	public function find($sql)
	{

		$res = mysqli_query($this->link, $sql);


		$data = mysqli_fetch_assoc($res);

		//debug($res);

       return $data;


	}

	public function execute($sql)
	{
		return mysqli_query($this->link, $sql);
	}

	public function recent_id()
	{
		return mysqli_insert_id($this->link);
	} 
}
