<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebTheme extends Model {
	protected $table      = 'web_theme';
	protected $fillable   = ['*'];
	public    $timestamps = FALSE;
}
