<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
	//
	public function index()
	{
		return view('pages.home.index');
	}

	//temp
	// public function login() {
	// 	return view('auth.login');
	// }

	// //temp
	// public function sign() {
	// 	return view('auth.signup');
	// }

	public function aboutus(){
		return view('pages.home.about');
	}
	
	public function blog(){
		return view('pages.home.blog');
	}
	
	public function contactus(){
		return view('pages.home.contact');
	}
}
