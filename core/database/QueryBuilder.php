<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function fetchAllTasks($table){
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		$tasks = $statement->fetchAll(PDO::FETCH_CLASS);
		//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

		//var_dump($tasks[0]->foobar());
		//var_dump($tasks);
		return $tasks;
	}

	public function fetchAllUsers($table)
	{
		try{
			$statement = $this->pdo->prepare("select * from {$table}");
			$statement->execute();
			$users = $statement->fetchAll(PDO::FETCH_CLASS);

			return $users;
		} catch (PDOException $e){
			echo $e;
		}
	}

	public function insertUser($table, $userParams)
	{
		// insert into %s (%s, %s) values (%s, %s)
		try{
		$sql = sprintf('insert into %s (%s) values (%s)',
				$table,
				implode(',', array_keys($userParams)),
				':'.implode(', :', array_keys($userParams))
				);
		$statement = $this->pdo->prepare($sql);
		$statement->execute($userParams);

		} catch(PDOException $e){
			echo $e;
		}
	}
}