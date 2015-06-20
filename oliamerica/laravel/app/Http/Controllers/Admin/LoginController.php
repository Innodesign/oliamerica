<?php

namespace oliamerica\Http\Controllers\Admin;

use oliamerica\Http\Controllers\Controller;

class LoginController extends Controller
{
	public function index()
	{
		return view('login.index');
	}
}