<?php

namespace App\Controllers;

use App\Models\ContactModel;

/**
 * 
 */
class Contact extends BaseController
{
	public $contactmodel;
	public function __construct()
	{
		helper('form');
		$this->contactModel = new ContactModel();
	}
	public function index()
	{
		$data = [];
		$data['validation'] = null;

		//$session = session();

		$session = \CodeIgniter\Config\Services::session();

		$rules = [
			'uname' => 'required|min_length[3]|max_length[20]',
			'email' => 'required|valid_email',
			'mobile' => 'required|numeric|exact_length[10]',
			'message' => 'required'
		];

		if($this->request->getMethod() == 'post')
		{
			if($this->validate($rules))
			{
				$cdata = [
					'name' => $this->request->getVar('uname',FILTER_SANITIZE_STRING),
					'email' => $this->request->getVar('email',FILTER_SANITIZE_STRING),
					'mobile' => $this->request->getVar('mobile',FILTER_SANITIZE_STRING),
					'message' => $this->request->getVar('message',FILTER_SANITIZE_STRING),
				];

				$status = $this->contactModel->saveData($cdata);
				if($status)
				{
					$session->setTempdata('success','Thanks, we will get back to you soon',3);
					return redirect()->to(current_url());
				}
				else
				{
					$session->setTempdata('error','Sorry Try again',3);
					return redirect()->to(current_url());
				}
				
			}
			else
			{
				$data['validation'] = $this->validator;
			}
		}
		

		return view('contact_view',$data);
	}
}