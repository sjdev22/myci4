<?php
namespace App\Controllers;



class TestMail extends BaseController
{
	
	public function index()
	{
		$to = 'jackngigi8@gmail.com';
		$subject = 'Account activation';
		$message = 'Hi Jack,<br><br>Your account has been created successfully. Please click the below link to activate <br><a href="'.base_url().'/testmail/verify" target="_blank">Activate</a><br><br>Thanks<br>Team';
		$filepath = 'public/assets/pic.jpg';
		$email = \Config\Services::email();
		$email->setTo($to);
		$email->setFrom('jacksongigz@gmail.com','myci4');
		$email->setSubject($subject);
		$email->attach($filepath);
		$email->setMessage($message);

		if($email->send())
		{
			echo "Account created successfully. Please verify your account";
		}
		else
		{
			$data = $email->printDebugger(['headers']);
			print_r($data);
		}
	}
}