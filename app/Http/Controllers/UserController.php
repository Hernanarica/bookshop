<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function login(Request $request)
	{
		$credentials = $request->validate([
			'username' => ['required', 'min:3'],
			'password' => ['required', 'min:8']
		]);
		
		if (Auth::attempt($credentials)) {
			return redirect()->route('home.view');
		}
		
		return back()->withErrors([
			'error_login' => 'The credentials entered are incorrect.'
		]);
	}
	
	public function logout(Request $request)
	{
		Auth::logout();
		
		return redirect()->route('login.view');
	}
	
	public function register(Request $request)
	{
		$request->validate([
			'name'     => ['required', 'min:3'],
			'username' => ['required', 'min:3', 'unique:users'],
			'email'    => ['required', 'email', 'unique:users'],
			'password' => ['required', 'min:8']
		]);
		
		DB::table('users')->insert([
			'name'     => $request->input('name'),
			'username' => $request->input('username'),
			'email'    => $request->input('email'),
			'password' => Hash::make($request->input('password'))
		]);
		
		return redirect()->route('home.view');
	}
}
