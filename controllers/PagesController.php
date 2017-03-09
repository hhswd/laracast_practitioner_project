<?php

class PagesController
{
	public function home()
	{
		$table = 'todos';
		$tasks = App::get('queryBuilder')->fetchAllTasks($table);

		return view('home', ['tasks' => $tasks]);
	}

	public function about()
	{
		$company = 'MageFace';
		return view('about', ['company' => $company]);
	}

	public function contact()
	{
		return view('contact', []);
	}

	public function products()
	{
		return view('products', []);
	}
}