<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use App\Models\WebTheme;

class AccessControl {
	public function __construct() {

	}

	public function handle($request, Closure $next) {

		return $next($request);
	}
}
