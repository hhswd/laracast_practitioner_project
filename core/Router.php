<?php

class Router
{
	protected $routes = [];

	// get routes from the file
	public function define($file){
		$this->routes = require $file;
	}

	// direct to the uri location
	public function direct($uri, $method){
		if(array_key_exists($uri, $this->routes[$method])){
			// explode controller and action
			return $this->doAction(...explode('@', $this->routes[$method][$uri]));
		//	return $this->routes[$method][$uri];
		//	require 'controllers/index.php';
		}
		else if (array_key_exists('err', $this->routes['GET'])) {
			// throw exception, e.g 404 page
			return require $this->routes['GET']['err'];
		}
		else {
			// return 404 from include_path
			return require '404.php';
		}
	}

	protected function doAction($controller, $action)
	{
		try
		{
			$controller =  new $controller;

			if(method_exists($controller, $action)){

				return $controller->$action();

			} else{

				throw new Exception("Controller {$controller} can not action {$action}");

			}

		} catch (Exception $e){
			echo $e;
		}
	}
}
