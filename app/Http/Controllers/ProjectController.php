<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller {

	function info() {
		$project = Auth::user()->projects()->where('status', '!=', 0)->where('status', '!=', 5)->where('id', Route::input('id'))->first();
		if (!$project) {
			return response('Forbidden.', 403);
		}
		return view('content.project')->with('project', $project);
	}

	function edit(Request $request) {
		//validate
		$this->validate($request, [
			'title' => 'required|max:255',
			'body'  => 'required',
		]);
		return response(Input::all(), 200);
	}
}