<?php

namespace App\Controllers;

use App\Models\DashboardModel;
/**
 * 
 */
class Dashboard extends BaseController
{
	public $dModel;
	public function __construct()
	{
		$this->dModel = new DashboardModel();
	}
	public function index()
	{
		if(!session()->has('logged_user'))
		{
			return redirect()->to('login');
		}
		$uniid = session()->get('logged_user');

		$data['userdata'] = $this->dModel->getLoggedInUserData($uniid);
		$data['page_title'] = 'Dashboard';

		return view('dashboard_view',$data);
	}
	public function logout()
	{
		if(session()->has('logged_info'))
		{
			$la_id = session()->get('logged_info');
			$this->dModel->updateLogoutTime($la_id);
		}
		session()->remove('logged_user');
		session()->destroy();
		return redirect()->to('login');
	}
	public function login_activity()
	{
		$data['page_title'] = 'Login Activity';
		$data['userdata'] = $this->dModel->getLoggedInUserData(session()->get('logged_user'));
		$data['login_info'] = $this->dModel->getLoginUserInfo(session()->get('logged_user'));
		
		return view('login_activity_view',$data);
	}
}