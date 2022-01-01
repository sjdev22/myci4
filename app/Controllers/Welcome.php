<?php 

namespace App\Controllers;

class Welcome extends BaseController
{
	public function index()
	{
		echo "Welcome to MyCI4";
	}
	public function test($name="")
	{
		echo "Welcome to ".$name;
	}
}