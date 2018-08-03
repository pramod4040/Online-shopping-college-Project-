<?php

namespace App\Models;

use System\Library\Model;

class Category extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function save($data)
	{
		$sql = "INSERT INTO category (ctitle, pid)
		values
		('{$data['ctitle']}', '{$data['pid']}')";

		return $this->db->execute($sql);
		
	}

    public function getData()
	{
		$sql = "SELECT * FROM category";

		$data = $this->db->query($sql);

		return $data;
	}

	public function findRootCategory()
	{
		$sql = "SELECT * FROM category WHERE pid = '0'";

		$data = $this->db->query($sql);

		return $data;
	}

	public function findChildCategory($parent_id)
	{
		$sql = "SELECT * FROM category WHERE pid ='{$parent_id}'";

		$data = $this->db->query($sql);

		return $data;
	}

	public function getCategories()
	{
		$sql = " SELECT * FROM category ";

		return $this->db->query($sql);
	}
}