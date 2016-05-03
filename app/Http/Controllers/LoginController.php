<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {

	function login_form() {
		return view('login.login_form');
	}

	function login(Request $request) {
		if (Auth::check() || Auth::viaRemember()) {
			return redirect()->intended('/');
		}

		$this->validate($request, [
			'username' => 'required|max:255',
			'password' => 'required|max:255',
		]);

		if (Auth::attempt(['email' => $request->username, 'password' => $request->password, 'can_login' => 1])) {
			return redirect()->intended('/');
		} else {
			return redirect('login')->withErrors(['fail' => "Can't log you in"]);
		}
	}
}
