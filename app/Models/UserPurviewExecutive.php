<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPurviewExecutive extends Model {
	protected $table      = 'user_purview_executive';
	protected $fillable   = ['*'];
	public    $timestamps = FALSE;
}
