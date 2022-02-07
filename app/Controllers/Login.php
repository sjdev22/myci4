<?php

namespace App\Controllers;
use App\Models\LoginModel;

/**
 * 
 */
class Login extends BaseController
{
	public $loginModel;
	public $session;
	public function __construct()
	{
		helper('form');
		$this->loginModel = new LoginModel();
		$this->session = session();
	}
	public function index()
	{
		$data = [];
		if($this->request->getMethod() == 'post')
		{
			$rules = [
				'email' => 'required|valid_email',
				'pass' => 'required|min_length[6]|max_length[16]'
			];
			if($this->validate($rules))
			{
				$email = $this->request->getVar('email');
				$password = $this->request->getVar('pass');

				$userdata = $this->loginModel->verifyEmail($email);
				if($userdata)
				{
					if(password_verify($password, $userdata['password']))
					{
						if($userdata['status'] == 'active')
						{

							$loginInfo = [
								'uniid' => $userdata['uniid'],
								'agent' => $this->getUserAgentInfo(),
								'ip'	=> $this->request->getIPAddress(),
								'login_time' => date('Y-m-d h:i:s')
							];
							$la_id = $this->loginModel->saveLoginInfo($loginInfo);
							if($la_id)
							{
								$this->session->set('logged_info',$la_id);
							}

							$this->session->set('logged_user',$userdata['uniid']);
							return redirect()->to('/dashboard');
						}
						else
						{
							$this->session->setTempdata('error','Please activate your accout or contact admin',3);
							return redirect()->to(current_url());
						}
					}
					else
					{
						$this->session->setTempdata('error','Sorry, wrong password entered for the email',3);
						return redirect()->to(current_url());
					}
				}
				else
				{
					$this->session->setTempdata('error','Sorry, Email does not exist',3);
					return redirect()->to(current_url());
				}
			}
			else
			{
				$data['validation'] = $this->validator;
			}
		}
		return view('login_view',$data);
	}
	public function getUserAgentInfo()
	{
		$agent = $this->request->getUserAgent();
		if($agent->isBrowser())
		{
			$currentAgent = $agent->getBrowser();
		}
		elseif($agent->isRobot())
		{
			$currentAgent = $this->agent->robot();
		}
		elseif($agent->isMobile())
		{
			$currentAgent = $agent->getMobile();
		}
		else
		{
			$currentAgent = 'Undefined UserAgent';
		}
		return $currentAgent;
	}
}