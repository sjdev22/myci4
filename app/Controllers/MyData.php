<?php

namespace App\Controllers;

use\App\Models\UsersModel;

/**
 * 
 */
class MyData extends BaseController
{
	
	public function index()
	{
		$userModel = new UsersModel();

		$data['subjects'] = $userModel->getData();
		return view('mydataview',$data);
	}
	public function userslist()
	{
		$userModel = new UsersModel();
		$data['users'] = $userModel->getUsersList();
		return view('userlist_view',$data);
	}
}