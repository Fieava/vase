<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	function login_form() {
		return view('login.login_form');
	}

	function login(Request $request) {
		if (Auth::check() || Auth::viaRemember()) {
			return redirect()->intended('dashboard');
		}

		$this->validate($request, [
			'username' => 'required|max:255',
			'password' => 'required|max:255',
		]);

		if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
			return redirect()->intended('dashboard');
		} else {
			return redirect('login')->withErrors(['fail' => 'Username or Password wrong']);
		}
	}
}
