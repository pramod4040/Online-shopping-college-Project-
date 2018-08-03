<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
	private $product;
	public function __construct()
	{
		$this->product = new Product();
    }

    public function index()
	{
		$products = $this->product->getProduct();

		$total = $this->product->totalRecords();

		$now = $this->product->getLatestProduct();

		view('home', compact('products','total', 'now'));
	}

	public function detail($request)
	{
		$proid = $request->id;

		$related = $this->product->getRelated($proid);
	
		$product = $this->product->getDetail($proid);

		$random = $this->product->randomProduct();

		view('detail/product_detail', compact('product', 'related', 'random'));
	}

	public function listProducts($request)
	{
	   $cid = $request->id;

	   $products = $this->product->getCategoryAll($cid);

	   $random = $this->product->randomProduct();

	   if(empty($products))
	   {

	   	  view('error/id_error');
        } else {

	   	 view('detail/category_detail',compact('products','random'));
	   }

	}
}