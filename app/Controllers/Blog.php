<?php 

/*
CodeIgniter loading views & passing data to them
*/

namespace App\Controllers;


class Blog extends BaseController
{
	public function index()
	{
		$data = [
			"page_title" => "Codeigniter 4",
			"page_heading" => "Codeigniter 4 views",
			"subjects" => ["HTML","CSS","Bootstrap","JavaScript","AJAX","JSON","jQuery","PHP","MySQL","CodeIgniter","Laravel"],
		];
		
		echo view("my_view",$data);
	}
}