<?php

namespace App\Controllers;
use App\Models\RegisterModel;

/**
 * 
 */
class Register extends BaseController
{
	public $registerModel;
	public $session;

	public function __construct()
	{
		helper('form');
		$this->registerModel = new RegisterModel();
		$this->session = \Config\Services::session();
	}
	
	public function index()
	{
		$data = [];
		$data['validation'] = null;

		if($this->request->getMethod() == 'post')
		{
			$rules = [
				'username'	=> 'required|min_length[4]|max_length[20]',
				'email'		=> 'required|valid_email|is_unique[users.email]',
				'pass'		=> 'required|min_length[6]|max_length[16]',
				'cpass'		=> 'required|matches[pass]',
				'mobile'	=> 'required|exact_length[10]|numeric'
			];
			if($this->validate($rules))
			{
				$uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
				$userdata = [
					'username' => $this->request->getvar('username',FILTER_SANITIZE_STRING),
					'email'		=> $this->request->getVar('email'),
					'password'	=> password_hash($this->request->getVar('pass'),PASSWORD_DEFAULT),
					'mobile'		=> $this->request->getVar('mobile'),
					'uniid'		=> $uniid,
					'created_at' => date('Y-m-d h:i:s')
				];
				if($this->registerModel->createUser($userdata))
				{
					$to = $this->request->getVar('email');
					$subject = 'Account Activation Link - MYCI4';
					$message = 'Hi '.$this->request->getvar('username',FILTER_SANITIZE_STRING).',<br><br>Thanks Your account created successfully. Please click the link below to activate<br><br>'.
					'<a href="'.base_url().'/register/actvate/'.$uniid.'">Activate Now<a/><br><br>Thanks<br><br>MyCI4';
					$email = \Config\Services::email();
					$email->setTo($to);
					$email->setFrom('admin@myci4.com','myci4');
					$email->setSubject($subject);
					$email->setMessage($message);

					if($email->send())
					{
						$this->session->setTempdata('success','Account Created Successfully. Please activate your account',3);
						return redirect()->to(current_url());
					}
					else
					{
						$this->session->setTempdata('error','Account created successfully, unable to send activation link. Contact admin',3);
						return redirect()->to(current_url());
						//$data = $email->printDebugger(['headers']);
						//print_r($data);
					}
				}
				else
				{
					$this->session->setTempdata('error','Sorry! Unable to create an account, try again.',3);
					return redirect()->to(current_url());
				}
			}
			else
			{
				$data['validation'] = $this->validator;
			}
		}


		return view('register_view',$data);
	}
}