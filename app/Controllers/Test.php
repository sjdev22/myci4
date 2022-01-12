<?php 
namespace App\Controllers;
use \CodeIgniter\Controller;

/**
 * 
 */
class Test extends BaseController
{
	public $parser;

	public function __construct()
	{
		$this->parser = \Config\Services::parser();
	}

	public function index()
	{
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

		return $this->parser->setData($data)->render("my_view");
		//echo view("my_view");
	}
	public function view_filters()
	{
		$data = [
			'page_title' 	=> 'My Blog Title',
			'page_heading'	=> 'My Blog Heading hello how are you?',
			'date'	=> '21-05-2020',
			'price'	=> '500',
			'price1'	=> '10.53',
			'mobile'	=> '8500669933',
		];
		return $this->parser->setData($data)->render("filter_view");

	}
}