<?php

namespace App\Controllers;

/**
 * 
 */
class FormValidation extends BaseController
{

	public function __construct()
	{
		helper('form');
	}
	
	public function index()
	{
		$data = [];
		$data['validation'] = null;

		/*$rules = [
			'username' 	=> 'required',
			'email'		=> 'required|valid_email',
			'mobile'	=> 'required|numeric|exact_length[10]',
		];*/

		$rules = [
			'username' 	=> [
				'rules'=>'required',
				'errors'=>[
					'required'=>'Username Required'
				]
			],
			'email'		=> [
				'rules'=>'required|valid_email',
				'errors'=>[
					'required'=>'Email Required',
					'valid_email'=>'Enter Valid Email'
				]
			],
			'mobile'	=> [
				'rules' => 'required|numeric|exact_length[10]',
				'errors' => [
					'required' => 'Enter Mobile Number',
					'numeric' => 'Mobile {value} should be numbers',
					'exact_length' => 'Mobile {value} should contain exactly {param} digits' 
				]
			],
		];

		if($this->request->getMethod() == 'post')
		{
			if($this->validate($rules))
			{
				//ready ro save
				echo "Ready To Save";
			}
			else
			{
				$data['validation'] = $this->validator;
			}
		}
		

		return view('myform',$data);
	}
}