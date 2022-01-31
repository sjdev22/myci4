<?php

namespace App\Libraries;

use App\Models\UsersModel;

/**
 * 
 */
class TestLibrary
{

	public $db;
	public $um;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->um = new UsersModel();
	}
	
	public function getData()
	{
		//return $this->db->query('select * from users')->getResultArray();
		return $this->um->getusersList();
	}
	public function displayData()
	{
		return 'Display data';
	}
}