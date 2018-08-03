<?php

use System\Library\Route;

//admin only

Route::get('admin/login', 'Admin\LoginController@index');

Route::get('admin/logout', 'Admin\LoginController@logout');

Route::get('admin/home', 'Admin\DashboardController@index');

Route::get('admin/product/edit/{id}', 'Admin\ProductController@edit');

Route::get('admin/product/delete/{id}', 'Admin\ProductController@delete');

Route::get('admin/product/add', 'Admin\ProductController@add');

Route::get('admin/category/add', 'Admin\CategoryController@index');

Route::get('admin/product/list', 'Admin\ProductController@index');

Route::get('admin/order', 'Admin\OrderController@Get_order');

Route::get('admin/order/details/{id}', 'Admin\OrderController@Order_details');

Route::get('admin/order/delete/{id}', 'Admin\OrderController@Order_delete');

Route::get('admin/order/status/{id}', 'Admin\OrderController@Change_status');

Route::get('admin/order/person/details/{id}', 'Admin\OrderController@Person');





// product and category for normal user

Route::get('','ProductController@index');

Route::get('home', 'ProductController@index');

Route::get('product/detail/{id}','ProductController@detail');

Route::get('category/detail/{id}','ProductController@listProducts');






// login and register

Route::get('user/register','LoginController@index');

Route::get('user/login', 'LoginController@login');

Route::get('out', 'LoginController@logout');

Route::get('user/signup', 'LoginController@signup');



//pages

Route::get('contact-us', 'PageController@contact');

Route::get('about-us', 'PageController@about');

Route::get('underconstruction/page', 'HomeController@error');

Route::get('underconstruction/epic', 'HomeController@ramilo');




//orders

Route::get('order/product', 'OrderController@order_entry');

Route::get('order/person/details', 'OrderController@Details');




//cart
Route::get('cart/add/{id}', 'CartController@add');

Route::get('cart', 'CartController@index');

Route::get('cart/delete/{id}', 'CartController@delete');

Route::get('cart/edit', 'CartController@edit');





//paypal

Route::get('payment/paypal', 'PaypalController@index');