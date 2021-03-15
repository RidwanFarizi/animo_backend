<?php namespace App\Controllers;

class Home extends BaseController
{
	public function contohPage()
	{
		$data = [
			'title' => 'Verify your Account',	
		];
		return view('pages/verify', $data);
	}

<<<<<<< HEAD
	public function index()
	{
		return view('welcome_message');
	}
=======
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
}
