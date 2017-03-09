<?php

/**
*
*/
class Request
{
	// transform uri
	public static function uri()
	{
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	}

	// transform request method
	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}