<?php

namespace App\Controllers;

/**
 * 
 */
class Sample extends BaseController
{
	
	public function create($num,$name)
	{
		echo "This is create method:".$num .$name;
	}
}