<?php

class Connection
{
	public static function make($config)
	{
		$host = $config['host'];
		$dbname = $config['dbname'];
		$charset = $config['charset'];

		$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

		try{
			$user = $config['user'];
			$pwd = $config['pwd'];
			$opt = $config['opt'];
			$pdo = new PDO($dsn, $user, $pwd, $opt);

			return $pdo;
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
}