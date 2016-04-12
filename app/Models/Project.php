<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
	protected $table      = 'projects';
	protected $fillable   = ['*'];
	public    $timestamps = TRUE;

	function models() {
		return $this->hasMany('App\Models\Models', 'project');
	}
}
