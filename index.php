<?php

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'].'/core/bootstrap.php';

$route = new Router;

$route->define('routes.php');

$route->direct(
	// class Request get the uri and method
	Request::uri(),
	Request::method()
	);


