<?php 
namespace App\Controllers;
use \CodeIgniter\Controller;

/**
 * 
 */
class Test extends BaseController
{
	
	public function index()
	{
		$parser = \Config\Services::parser();

		$data = [
			'page_title' 	=> 'My Blog Title',
			'page_heading'	=> 'My Blog Heading',
			'subjects_list' => [
				['subject' => 'HTML', 'abbr' => 'Hyper Text Markup Language'],
				['subject' => 'CSS', 'abbr' => 'Cascading Style Sheets'],
				['subject' => 'JSON', 'abbr' => 'JavaScript Object Notation'],
				['subject' => 'AJAX', 'abbr' => 'Asyncronous Javascript and XML'],
				['subject' => 'PHP', 'abbr' => 'Hypertext Preprocessor'],
			],
			'status' => false
		];

		return $parser->setData($data)->render("my_view");
		//echo view("my_view");
	}
}