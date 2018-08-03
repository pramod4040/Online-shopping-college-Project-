<?php

namespace App\Controllers\Admin;

use App\Models\Product;

use App\Models\Category;

class ProductController
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
		$product = new Product();
		$products = $product->getProductOnly();

		view('admin/product/list', compact('products'));
	}

	public function add()
	{
		$errors =[];

		if($_POST)
		{
			$cid = $_POST['cid'];
			$title = $_POST['title'];
			$price = $_POST['price'];
			$content = $_POST['content'];
			$image = '';

			if($_FILES['image']['error'] > 0)
			{
				$errors['image'] = 'Please Choose image';

			} else{

				$allowed = [
 						'image/png',
 						'image/jpeg',
 						'image/jpg',
 						'image/gif'
				];

				if(in_array($_FILES['image']['type'], $allowed)){

					$filename = time() . '_' . $_FILES['image']['name'];

					$filepath = '/assets/uploads/' . $filename;

					$destination = ROOT_PATH . $filepath;

					if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)){

						$image = $filepath;
					}
                  
                  }  else {

					$errors['image'] = "Image type not allowed";
				}


			}

			if(!$errors)
			{
				$product = new Product();


				$data = [
					'cid'	=> $cid,
  					'title' => $title,
  					'price' => $price,
  					'content' => $content,
  					'image' => $image
				];

				$status = $product->save($data);

				if($status){

					$_SESSION['success'] = "Sucessfully Inserted";
				} else {
					$_SESSION['error'] = "Error inserting";
				}

				redirect('/admin/product/add');
			}


		}

		$category = new Category();

		$categories = $category->getCategories();

        view('admin/product/add', compact('errors', 'categories'));
	}

	public function edit($request)
	{
        $id = $request->id;

		 $product = new Product();
		 $pinfo = $product->findById($id);

		if($_POST){
			$title = $_POST['title'];
			$price = $_POST['price'];
			$content = $_POST['content'];
			$cid = $_POST['cid'];
			$image = '';

			$image = $pinfo['image'];

			if($_FILES['image']){


               	$allowed = [
                       
                       'image/png',
                       'image/jpg',
                       'image/jpeg',
                       'image/gif',
               	];


               	if(in_array($_FILES['image']['type'], $allowed)){

               		$filename = time() . '_' . $_FILES['image']['name'];

				$filepath = '/assets/uploads/' . $filename;

				$destination = ROOT_PATH . $filepath;



				if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
					 //echo 'uploaded';
					if(is_file($image)){
					unlink($image);
				 } 

					$image = $filepath;
		
				 }else{
               		$errors['image'] = "Image type not allowed";
               	}
             }
         }



             if(!$errors)
			{


				$product = new Product();

			$data = [
               'title' => $title,
               'price' => $price,
               'content' => $content,
               'image' => $image,
               'cid' => $cid

			];

			$status = $product->update($data,$id);

			if($status){

                $_SESSION['success'] = "Sucessfully Inserted";

			} else{

				$_SESSION['error'] = "Error inserting";
			}


			redirect('/admin/product/list');
          }


}

	     $category = new Category();

	     $categories = $category->getCategories();

		view('/admin/product/edit', compact('pinfo', 'categories','errors'));
		
}

	public function delete($request)
	{
		$id = $request->id;

		$product = new Product();

		$pinfo = $product->findById($id);

		if($pinfo){

			$status = $product->delete($id);

			$oldimage = ROOT_PATH . $pinfo['image'];

			if(is_file($oldimage)){
				unlink($oldimage);
			}

			if($status){

				$_SESSION['success'] = "Successfully Deleted";

			} else{

				$_SESSION['error'] = "Error in Deleting";

			}
		} else{
			$errors['image'] = "Cannot find product";
		}

		redirect('/admin/product/list', compact($errors));
	}







}