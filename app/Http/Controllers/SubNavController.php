<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class SubNavController extends Controller {

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
		return view('sub_nav.model')->with('projects', $projects);
	}

	function task() {
		$projects     = Auth::user()->projects()->where('status', '!=', 0)->Where('status', '!=', 5)->get();
		$project_list = [];
		foreach ($projects as $project) {
			$project_list[] = $project->id;
		}
		$models = Models::whereIn('project', $project_list)->where('status', '!=', 0)->Where('status', '!=', 5)->Where('parent', NULL)->get()->toArray();
		$models = $this::get_sub_models($models);

		return view('sub_nav.task')->with('models', json_encode($models))->with('projects', $projects);
	}

	function taskByProject() {
		$projects = Auth::user()->projects()->where('status', '!=', 0)->Where('status', '!=', 5)->get();
		$project  = Auth::user()->projects()->where('status', '!=', 0)->Where('status', '!=', 5)->where('id', Route::input('id'))->first()->toArray();
		if (!$project) {
			return response('Forbidden.', 403);
		}

		$models = Models::where('project', Route::input('id'))->where('status', '!=', 0)->Where('status', '!=', 5)->Where('parent', NULL)->get()->toArray();
		$models = $this::get_sub_models($models);

		return view('sub_nav.task_by_project')->with('models', json_encode($models))->with('projects', $projects)->with('current_project', $project);
	}

	function get_sub_models($models) {
		if (is_array($models) && empty($models['id'])) {
			foreach ($models as $key => $model) {
				$models[$key]['sub_models'] = $this->get_sub_models_from_DB($model['id']);
				if (!is_null($models[$key]['sub_models'])) {
					foreach ($models[$key]['sub_models'] as $ed_key => $ed_model) {
						$models[$key]['sub_models'][$ed_key] = $this->get_sub_models($ed_model);
					}
				} else {
					return NULL;
				}
			}
		} else {
			$models['sub_models'] = $this->get_sub_models_from_DB($models['id']);
			if (!is_null($models['sub_models'])) {
				foreach ($models['sub_models'] as $ed_key => $ed_model) {
					$models['sub_models'][$ed_key] = $this->get_sub_models($ed_model);
				}
			} else {
				return NULL;
			}
		}
		return $models;
	}

	function get_sub_models_from_DB($id) {
		return Models::where('parent', $id)->where('status', '!=', 0)->Where('status', '!=', 5)->get()->toArray();
	}
}