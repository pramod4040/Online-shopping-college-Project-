<?php 

namespace App\Controllers\Admin;

use App\Models\Order;
use App\Models\Person_details;

class OrderController
{
	public function __construct()
	{
		if(isset($_SESSION['admin']['username']) == 0)
		{
			redirect('/admin/login');
			die('You need to login first.');
		}
	}
	
    public function index()
	{
		view('admin/orders/order');
	}

	public function Get_order()
	{
		$order = new Order();

		$info = $order->getOrder();

		view('admin/orders/order', compact('info'));
	}

	public function Order_details($request)
	{
		$oid = $request->id;

		$order = new Order();

		$info = $order->getDetails($oid);

		view('admin/orders/details', compact('info'));
	}

	public function Order_delete($request)
	{
		$oid = $request->id;

		$order = new Order();

	    $status = $order->deleteOrder($oid);

	    if($status)
	    {
	    	$_SESSION['success'] = " Successfully deleted";

	    } else{
	    	$_SESSION['error'] = " Unsuccessfull to delete";
	    }

	    

	    redirect('/admin/order');

	}

	public function Change_status($request)
	{
		if($_POST){
			$oid = $request->id;
			$value = $_POST['status'];

			$order = new Order();

			$status = $order->updateStatus($oid, $value);

			 if($status){
	    	$_SESSION['success'] = " Successfully updated status";

	    } else{
	    	$_SESSION['error'] = " Unsuccessfull to update status";
	    }

	      redirect('/admin/order');
       }
		
        view('admin/orders/status');
	}

	public function Person($request)
	{
		$oid = $request->id;

		$person = new Person_details();

		$details = $person->getPerson($oid);

		view('admin/orders/person', compact('details'));


	}

	

}

