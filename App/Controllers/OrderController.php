<?php

namespace App\Controllers;

use App\Models\Order;
use App\Models\Person_details;


class OrderController
{

	public function __construct()
	{
		
	}

	public function order_entry()
	{
		if($_POST)
		{
			$name = $_POST['name'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];
			$house = $_POST['house'];
			$street = $_POST['street'];



        $order = new Order();
        $details = new Person_details();

	    $info = $_SESSION['data'];

	    $order_id = rand(1,500);

		$num = rand(10000,50000);
		$invoice_no = "BA" . $num;

	    $user_id = $_SESSION['user']['id'];

	

	    if(isset($_SESSION['cart'])){

	    $it = $_SESSION['cart'];

	    $data = [
	    	'info'			=>  $info,
	    	'items'			=>	$it,
	    	'invoice_no'	=>	$invoice_no,
	    	'user_id'		=>	$user_id,
	    	'order_id'		=>	$order_id
          ];

         $person = [
	    		'order_id'	=> $order_id,
				'name' 		=> $name,
				'address'	=> $address,
				'contact'	=> $contact,
				'house'		=> $house,
				'street'	=> $street
			];

          $status = $order->save($data);
          $status1 = $order->detail($data);
          $status2 = $details->add($person); 


	     if($status & $status1 &$status2){
          	$_SESSION['order_success'] = "Your product successfully ordered.";

          }else{

          	$_SESSION['order_error'] = "Your product is NOT ordered.";

           }
       }

           redirect('/order/product');
       }

       view('cart/list');
          
         
	}

	public function Details()
	{
		view('cart/details');
	}


}