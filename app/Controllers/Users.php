<?php

namespace App\Controllers;


/**
 * 
 */
class Users extends BaseController
{
	
	public function index()
	{
		$db1 = \Config\Database::connect();
		$db2 = \Config\Database::connect("seconddb");
		$query1 = $db1->query('select title, slug, body from news');
		$result1 = $query1->getResult();
		echo "<pre>";
		print_r($result1);

		$query2 = $db2->query('select username, email, role from users');
		$result2 = $query2->getResult();

		print_r($result2);
		
	}
}