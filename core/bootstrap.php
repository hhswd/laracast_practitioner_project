<?php

//$app = [];
/*
require $_SERVER['DOCUMENT_ROOT'].'/core/database/QueryBuilder.php';
require $_SERVER['DOCUMENT_ROOT'].'/core/database/Connection.php';
require $_SERVER['DOCUMENT_ROOT'].'/core/Router.php';
require $_SERVER['DOCUMENT_ROOT'].'/core/Request.php';
*/


App::bind('config', require $_SERVER['DOCUMENT_ROOT'].'/config.php');

App::bind('queryBuilder', new QueryBuilder(
		Connection::make(App::get('config')['database'])
	));

function view($pageName, $data=[])
{
	extract($data);
	return require $_SERVER['DOCUMENT_ROOT']."/views/{$pageName}.view.php";
}


/*
$app['config'] = require $_SERVER['DOCUMENT_ROOT'].'/config.php';
$app['queryBuilder'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);
*/
?>

