<?php

namespace App\Models;

use \CodeIgniter\Model;

/**
 * 
 */
class ContactModel extends Model
{
	
	public function saveData($data)
	{
		$db = \Config\Database::connect();

		$builder = $db->table('contact');

		$res = $builder->insert($data);
		if($db->affectedRows() >= 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}