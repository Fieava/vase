<?php

namespace App\Http\Controllers;

class ContentController extends Controller {

	function welcome1() {
		return view('sub_nav.blank');
	}

	function blank() {
		return view('content.blank');
	}

	function load_error() {
		return view('content.load_error');
	}

	function forbidden() {
		return view('content.forbidden');
	}
}
