<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPurview extends Model {
	protected $table      = 'group_purview';
	protected $fillable   = ['*'];
	public    $timestamps = FALSE;
}
