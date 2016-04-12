<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
		$projects = Auth::user()->projects()->where('status', '!=', 0)->Where('status', '!=', 5)->get();
		return view('sub_nav.project')->with('projects', $projects);
	}

	function model() {
		$projects = Auth::user()->projects()->where('status', '!=', 0)->Where('status', '!=', 5)->get();
		$models = Auth::user()->models()->where('status', '!=', 0)->Where('status', '!=', 5)->get();
		return view('sub_nav.model')->with('model', $models);
	}
}