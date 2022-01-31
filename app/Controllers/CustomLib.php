<?php

namespace App\Controllers;

/**
 * 
 */

use App\Libraries\TestLibrary;


class CustomLib extends BaseController
{
	public $tl;
	public function __construct()
	{
		$this->tl = new TestLibrary();
	}
	
	public function index()
	{
		$data = $this->tl->getdata();
		print_r($data);
	}
}