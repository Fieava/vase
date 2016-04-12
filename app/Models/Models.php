<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model {
	protected $table      = 'models';
	protected $fillable   = ['*'];
	public    $timestamps = TRUE;

	function children() {
		return $this->hasMany('App\Models\Models');
	}
}