<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model {
	protected $table      = 'project_team';
	protected $fillable   = ['*'];
	public    $timestamps = FALSE;
}
