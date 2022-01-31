<?php

namespace App\Controllers;

/**
 * 
 */
class TestHelpers extends BaseController
{
	
	public function index()
	{
		//helper('form');
		//helper('html');
		//helper('cookie');
		helper(['form','html','cookie','array','test']);
		

		echo getrandom([10,20,30,40,50,60]);

		echo randomString();


		/*
		echo form_open();
		echo form_input("username","gophp");
		
		echo base_url();
		echo current_url();
		*/
	}
}