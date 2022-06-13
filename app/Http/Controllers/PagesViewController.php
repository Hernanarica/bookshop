<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesViewController extends Controller
{
	public function homeView()
	{
		return view('sections.home');
	}
	
	public function profileView()
	{
		return view('sections.profile');
	}
	
	public function registerView()
	{
		return view('sections.register');
	}
	
	public function loginView()
	{
		return view('sections.login');
	}
}
