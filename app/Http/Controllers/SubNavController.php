<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SubNavController extends BaseController {

	function blank() {
		return view('sub_nav.blank');
	}

	function load_error() {
		return view('sub_nav.load_error');
	}

	function forbidden() {
		return view('sub_nav.forbidden');
	}

	function project() {
		return view('sub_nav.project');
	}
}
