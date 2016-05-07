<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ProjectController extends Controller {

	function info() {
		$project = Auth::user()->projects()->where('status', '!=', 0)->where('status', '!=', 5)->where('id', Route::input('id'))->first();
		if (!$project) {
			return response('Forbidden.', 403);
		}
		return view('content.project')->with('project', $project);
	}

	function edit(Request $request) {
		// validate
		$this->validate($request, [
			'name'             => 'required|max:255',
			'development_name' => 'required',
			'start_at'         => 'date_format:Y-m-d H:i:s',
			'end_at'           => 'date_format:Y-m-d H:i:s',
		]);
		// edit
		$project = Project::find(Route::input('id'));
		foreach (Input::except('_token') as $key => $value) {
			if (empty($value) && in_array($key, ['start_at', 'end_at'])) {
				$project->$key = NULL;
			} else {
				$project->$key = $value;
			}
		}
		$project->save();
		return response()->json([
			                        'code'   => '0',
			                        'msg'    => 'OK',
			                        'action' => [[
				                        'nav_item'  => NULL,
				                        'action'    => 'load_content',
				                        'container' => 'sub_nav',
				                        'url'       => 'sub_nav/projects'
			                        ], [
				                        'nav_item'  => '#sub_nav_project_' . Route::input('id'),
				                        'action'    => 'load_content',
				                        'container' => 'content',
				                        'url'       => 'projects/info/' . Route::input('id')
			                        ]
			                        ]
		                        ]);
	}
}