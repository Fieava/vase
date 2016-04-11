<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController {

	function info() {
		$projects = Auth::user()->projects()->where('status', '!=', 0)->Where('status', '!=', 5)->get();
		return view('sub_nav.project')->with('projects', $projects);
	}
}