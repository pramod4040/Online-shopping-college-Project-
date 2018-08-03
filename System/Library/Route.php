<?php

namespace System\Library;

class Route
{
	private static $controller;
	private static $action;
	private static $routes = [];
	private static $segment = [];


	public function __construct()
	{

	}

	public static function get($key, $val)
	{
		self::$routes[$key] = $val;

	}

	public function parse()
	{
		$uri = $_SERVER['REQUEST_URI'];

		$uri = explode('?', $uri)[0]; //if url contains any get data then it will seperat.

		$uri = trim($uri, '/');

	//	$admin = preg_match('/admin/',$uri);

		$status = preg_match('/\d+/', $uri, $matches);

		if($status){
			self::$segment['id'] = $matches[0];
		}

		$uri = preg_replace('/\d+/', '{id}', $uri);


		

		$classaction = '';

		if(array_key_exists($uri, self::$routes)){

			$classaction = self::$routes[$uri];
		}


		if($classaction){

			$classparts = explode('@', $classaction);

			self::$controller = $classparts[0];

			self::$action = $classparts[1];

		} else {

			echo '<br> Route.php <br>';
			die('ERROR: Route <strong>' . $uri . ' </strong> not defined');
		}



	}

	public function dispatch()
	{

		$action = self::$action;
		$class  = self::$controller;
		$request = self::$segment;



		$request = (object) $request;

		$namespace = 'App\Controllers\\' . $class;

		$request = (object) self::$segment;

		// $admin = preg_match('/Admin/', $class);

		// $login = preg_match('/login/', $class);

		$object = new $namespace();

		if(method_exists($object, $action)){

			// if($admin == 1)
			// {
			// 	if(isset($_SESSION['admin']['username'])){

			// 		$object->$action($request);
			// 		die;

			// 	} else {

			// 		if($login == 1){

			// 			$object->$action($request);

			// 		}

			// 		view('admin/login');
			// 	}
			// }
		 $object->$action($request);

		} else{

			echo '<br> Route.php <br>';
			die('Error 404: Action <strong.' . $action . '</strong> does not exist.'); 
		}
	}
}





	// } else{
		
	// 	$object = new $namespace();

	// 	if(method_exists($object, $action)){

	// 		if(isset($_SESSION['admin']['username']))
	// 	    {

	// 		$object->$action($request);

	// 	     } else{

	// 	     	//view('admin/login');
		     	
	// 	     }
	// 	} else{

	// 		echo '<br> Route.php <br>';
	// 		die('Error 404: Action <strong.' . $action . '</strong> does not exist.'); 
	// 	}
	// } 




