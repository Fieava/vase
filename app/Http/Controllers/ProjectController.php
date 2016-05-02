<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

class ProjectController extends BaseController {

	function info() {
		$project = Auth::user()->projects()->where('status', '!=', 0)->where('status', '!=', 5)->where('id', Route::input('id'))->first();
		if (!$project) {
			return response('Forbidden.', 403);
		}
		return view('content.project')->with('project', $project);
	}

	function edit() {
		//validate
		return response(Input::all(), 200);
	}
}