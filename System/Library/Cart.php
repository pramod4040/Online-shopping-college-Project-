<?php 

namespace System\Library;


/**
$_SESSION['cart'];

$items =[
 
 	'item_id' =>  [

 		'id'  		=> 1,
 		'title'  	=> 'Pendrive 32 gb',
 		'price' 	=> 1600,
 		'qty'  		=> 4,
 		'sub_total' => 6400,
 		'image' 	=> '/assets/abc.jpg' 
 		],

 	'item_id' =>  [

 		'id'  		=> 2,
 		'title'  	=> 'Pendrive 64 gb',
 		'price' 	=> 2000,
 		'qty'  		=> 2,
 		'sub_total' => 8000
 		]




];



*/

class Cart
{
	public function insert($item)
	{
		$qty = $item['qty'];
		$price = $item['price'];
		$image = $item['image'];
		$item_proid = md5($item['proid']);
		$proid = $item['proid'];
        
        
        if(array_key_exists($item_proid, $_SESSION['cart']))
        {

        	$qty = $this->findItemQty($proid) + $item['qty'];
        }

        $item['qty'] = $qty;

		$item['sub_total'] = $this->sub_total($qty, $price);

		$_SESSION['cart'][$item_proid] = $item;

	}
    
    public function findItemQty($id)
	{
		$item_proid = md5($id);

		return $_SESSION['cart'][$item_proid]['qty'];
	}

	public function update($items)
	{
		// debug($items);

		foreach($items as $id=>$qty){
			if(is_numeric($id)){
			$item_proid = md5($id);
		} else{
			$item_id = $id;
		}
		if($qty > 0){

		$price = $_SESSION['cart'][$item_proid]['price'];
        $_SESSION['cart'][$item_proid]['qty'] = $qty;
		$_SESSION['cart'][$item_proid]['sub_total'] = $this->sub_total($qty, $price);
	     }

		}

	}

	public function remove($id)
	{
		$item_proid = md5($id);

		unset($_SESSION['cart'][$item_proid]);
	}

	public function total()
	{
		$items = $this->items();

		$total = 0;
		foreach($items as $item)
		{
			$total = $total + $item['sub_total'];
		}

		return $total;

	}

	public function total_quantity()
	{
		$items = $this->items();

		$total_qty = 0;
		foreach($items as $item)
		{
			$total_qty = $total + $item['qty'];
		}

		return $total_qty;

	}

	public function sub_total($qty, $price)
	{
		return $qty * $price;
	}

	public function items()
	{
		if(isset($_SESSION['cart']))
		{
		return ($_SESSION['cart']);
		} else{
			return;
		}
	}

	public function edit()
	{

	}

	public function clear()
	{
		unset($_SESSION['cart']);
	}


}