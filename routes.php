<?php

return [
	// get method array
	'GET' => [
	'' => 'PagesController@home',
	'about' => 'PagesController@about',
	'contact' => 'PagesController@contact',
	'products' => 'PagesController@products',

	'addUser' => 'UsersController@addUser',
	'displayUsers' => 'UsersController@displayUsers',

	'err' => $_SERVER['DOCUMENT_ROOT'].'/controllers/404.php',
	'test' => $_SERVER['DOCUMENT_ROOT'].'/controllers/test.php',
	'test2' => $_SERVER['DOCUMENT_ROOT'].'/controllers/test2.php'
	],

	// post method array
	'POST' => [
	'addUser' => 'UsersController@addUser'
	]
];