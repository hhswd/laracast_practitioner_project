<?php

class UsersController
{
	public function addUser()
	{
		// init variables:
		$name = '';
		$age = '';
		$nameErr = '';
		$ageErr = '';
		// add legal user into the table:
		if(isset($_POST['userInfoSubmit']) && !empty($_POST['name']) && !empty($_POST['age']))
		{

			$name = $_POST['name'];
			$age = $_POST['age'];

			$userParams = [
					'name' => $name,
					'age' => $age
			];

			$table = 'users';
			App::get('queryBuilder') -> insertUser($table, $userParams);

			header("Location: /displayUsers");

		// deal whith illegal input:
		} else
			{
				if(isset($_POST['name'])){
					$name = $_POST['name'];
				}

				if(isset($_POST['age'])){
					$age = $_POST['age'];
				}

				if(isset($_POST['userInfoSubmit']) && empty($name)){

					$nameErr = '* name err';
				}
				if(isset($_POST['userInfoSubmit']) && empty($age)){

					$ageErr = '* age err';
				}

				return view('addNames', ['name'=>$name, 'age'=>$age, 'nameErr'=>$nameErr, 'ageErr'=>$ageErr]);
			}
	}

	public function displayUsers()
	{
		$table = 'users';
		$users = App::get('queryBuilder')->fetchAllUsers($table);

		return view('userList', ['users' => $users]);
	}
}