<?php 

namespace App\Controllers;

use App\Models\Product;
use System\Library\Cart;

class CartController
{
	private $product;
	private $cart;

	public function __construct()
	{
		$this->product = new Product();
		$this->cart = new Cart();

	}

	public function add($request)
	{
		if(isset($_SESSION['user']['id'])){
		//$this->cart->clear();

		if($_POST['qty'])
		{
		   $qty = $_POST['qty'];
	    } else{
	        $qty = 1;
	    }
		$id = $request->id;

		$pinfo = $this->product->findById($id);

		$item = [
				'proid'  =>  $pinfo['proid'],
				'title'  => $pinfo['title'],
				'price'  => $pinfo['price'],
				'image'  => $pinfo['image'],
				'qty'  => $qty
		];

		$this->cart->insert($item);

		redirect('/cart');
	} else{
		redirect('/user/register');
	}



	}

	public function index()
	{
		//echo 'listing';
	
        $items = $this->cart->items();
        if($items){

		view('/cart/list', compact('items'));
	     } else {
	     	view('/cart/list');

	     }

	}

	public function edit()
	{
		if($_POST)
		{
			// debug($_POST);

			$this->cart->update($_POST['qty']);
  		}

  		redirect('/cart'); 

	}

	public function clear()
	{
		$this->cart->clear();

		redirect('/cart');
	}

	public function delete($request)
	{
		$id = $request->id;
        $this->cart->remove($id);
        redirect('/cart');


	}
}