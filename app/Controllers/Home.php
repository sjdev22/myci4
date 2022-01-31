<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    	$data = [
    		'page_title' => 'Welcome to CodeIgniter 4',
    		'page_heading' => 'CodeIgniter 4 Training',
    	];
        
        return view('index2.html');
    }
     public function about()
    {
    	$data = [
    		'page_title' => 'Welcome to CodeIgniter 4',
    		'page_heading' => 'About Us',
    	];
        
        return view('aboutview',$data);
        
    }
}
