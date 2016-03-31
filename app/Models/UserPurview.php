<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPurview extends Model {
	protected $table      = 'user_purview';
	protected $fillable   = ['*'];
	public    $timestamps = FALSE;
}
