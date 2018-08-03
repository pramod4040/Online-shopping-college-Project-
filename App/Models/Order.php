<?php 

namespace App\Models;

use System\Library\Model;

class Order extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function save($data)
	{
		$sql = " INSERT INTO orders (user_id, invoice_no, vat, total, order_id)
		values
		(
			'{$data['user_id']}',
			'{$data['invoice_no']}',
			'{$data['info']['vat']}',
			'{$data['info']['total']}',
			'{$data['order_id']}'
		)";

		return $this->db->execute($sql);
	}

	public function detail($data)
	{
	
		foreach($data['items'] as $info){

           
         $sql = " INSERT INTO order_details (order_id, pro_id, title, qty, price, subtotal)
		  values
		  (
		    '{$data['order_id']}',
		    '{$info['proid']}',
		    '{$info['title']}',
		    '{$info['qty']}',
		    '{$info['price']}',
		    '{$info['sub_total']}'
		  )";

	      $status = $this->db->execute($sql);

		};

		return $status;
	}

	public function getOrder()
	{
		$sql = " SELECT * FROM orders ";

		return $this->db->query($sql);
	}

	public function getDetails($oid)
	{
		$sql = " SELECT * FROM order_details WHERE order_details.order_id = $oid ";

		return $this->db->query($sql);
	}

	public function deleteOrder($oid)
	{
		$sql = " DELETE FROM orders WHERE order_id = $oid ";

		return $this->db->execute($sql);
	}

	public function updateStatus($oid, $value)
	{

		$sql = " UPDATE orders SET status = '{$value}' WHERE order_id = '{$oid}' ";
		
        return $this->db->execute($sql);
	}


}