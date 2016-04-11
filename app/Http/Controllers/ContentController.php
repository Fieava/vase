<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ContentController extends BaseController {

	function welcome1() {
		return view('sub_nav.blank');
	}

	function load_error() {
		return view('content.load_error');
	}

	function forbidden() {
		return view('content.forbidden');
	}
}
