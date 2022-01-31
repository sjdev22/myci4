<?php
namespace App\Controllers;



class TestMail extends BaseController
{
	
	public function index()
	{
		$to = 'jackngigi8@gmail.com';
		$subject = 'Account activation';
		$message = 'Hi Jack,<br><br>Your acout has brrn created successfully. Please click the below link to activate <br><a href="'.base_url().'/testmail/verify" target="_blank">Activate</a><br><br>Thanks<br>Team';
		$email = \Config\Services::email();
		$email->setTo($to);
		$email->setSubject($subject);
		$email->setMessage($message);
		if($email->send())
		{
			echo "Account created successfully. Please verify your accont";
		}
		else
		{
			$data = $email->printDebugger(['headers']);
			print_r($data);
		}
	}
}