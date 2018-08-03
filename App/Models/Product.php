<?php

namespace App\Models;

use System\Library\Model;

class Product extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function save($data)
	{
		$sql = "INSERT INTO products (cid, title, price, content, image)
		VALUES 
		(
			'{$data['cid']}',
			'{$data['title']}',
			'{$data['price']}',
			'{$data['content']}',
			'{$data['image']}'
		)";

		return $this->db->execute($sql);
	}

	public function getProduct()
	{
	   $sql = "SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id";
	
     $products = $this->db->query($sql);

     return $products;

	 }

	public function totalRecords()
	{
		$sql = " SELECT count(*) as total FROM products ";

		$total = $this->db->find($sql);

		return $total['total'];
	}

	public function getDetail($proid)
	{
		$sql = " SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id WHERE proid= '$proid'";

	   	$product = $this->db->find($sql);

		return $product;
	}

	public function findCategoryId($proid)
	{
		$sql = "SELECT cid FROM products WHERE proid = '{$proid}'";

		$categoryid = $this->db->find($sql);

		return $categoryid;
	}

	public function getRelated($proid)
	{
		$categoryid = $this->findCategoryId($proid);

		$id = $categoryid['cid'];

		$sql = "SELECT * FROM products WHERE cid = '{$id}' ";

	    return $this->db->query($sql);
	}

	public function getLatestProduct()
	{
		$sql = "SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id ORDER BY created_at desc LIMIT 10";

	    $now = $this->db->query($sql);

        return $now;
    }

    public function getCategoryAll($cid)
    {
    	$sql = " SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id WHERE cid = '{$cid}'";

    	$products = $this->db->query($sql);

    	return $products;
    }

    public function randomProduct()
    {
      $sql = " SELECT * FROM products
	   LEFT JOIN category ON products.cid = category.id ORDER BY RAND() LIMIT 5 ";

      $products = $this->db->query($sql);

      return $products;
    }

    public function findById($id)
	{
		$sql = "SELECT * FROM products WHERE proid = '{$id}'";

		return $this->db->find($sql);


	}

	public function getProductOnly()
	{
		$sql = " SELECT * FROM products ";

		$products = $this->db->query($sql);

		return $products;
	}

	public function update($data, $id)
	{
       $sql = "UPDATE products SET  
              title = '{$data['title']}',
              price = '{$data['price']}',
              content = '{$data['content']}',
              image = '{$data['image']}',
              cid = '{$data['cid']}'
              WHERE proid = '{$id}'
              ";

       return $this->db->execute($sql);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM products WHERE proid='{$id}'";

		return $this->db->execute($sql);
	}
}

