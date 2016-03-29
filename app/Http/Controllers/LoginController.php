<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController {
	function login_form() {
		return view('login.login_form');
	}

	function login() {
		if (Auth::check() || Auth::viaRemember()) {
			return redirect()->intended('dashboard');
		}

		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			// Authentication passed...
			return redirect()->intended('dashboard');
		}
	}
}
