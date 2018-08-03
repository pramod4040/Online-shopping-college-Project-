<?php 

namespace App\Models;

use System\Library\Model;

class Person_details extends Model
{
	public function add($person)
	{
		$sql = "INSERT INTO person_details (order_id, name, address, contact, house, street)
		values
		(
			'{$person['order_id']}',
			'{$person['name']}',
			'{$person['address']}',
			'{$person['contact']}',
			'{$person['house']}',
			'{$person['street']}'

		)";

		return $this->db->execute($sql);
	}

	public function getPerson($oid)
	{
		$sql = " SELECT * FROM person_details WHERE order_id = $oid ";

		return $this->db->query($sql);
	}
}