<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('header', $this->data).view('pages/homepage',$this->data).view('footer',$this->data);
	}

}
