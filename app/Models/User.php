<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
	protected $fillable   = ['real_name', 'display_name', 'email', 'password'];
	protected $hidden     = ['password', 'remember_token'];
	public    $timestamps = TRUE;

	public function groups() {
		return $this->hasMany('App\Models\UserGroup', 'uid');
	}

	public function group_purview() {
		// 使用 Has Many Through 是不是有性能问题？
		return $this->hasManyThrough('App\Models\GroupPurview', 'App\Models\UserGroup', 'uid', 'gid');
	}

	public function purview() {
		return $this->hasMany('App\Models\UserPurview', 'uid');
	}

	public function purview_executive() {
		return $this->hasMany('App\Models\UserPurviewExecutive', 'uid');
	}

	public function project_team() {
		return $this->hasMany('App\Models\ProjectTeam', 'uid');
	}

//	public function projects() {
//		return $this->hasManyThrough('App\Models\Project', 'App\Models\ProjectTeam', 'uid', 'project');
//	}

	public function projects() {
		$projects_items = $this->project_team()->get(['project']);
		$project_ids    = [];
		foreach ($projects_items as $project_item) {
			$project_ids[] = $project_item->project;
		}
		return Project::whereIn('id', $project_ids);
	}
}