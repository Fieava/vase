<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class AccessControl {
	public function __construct() {

	}

	public function handle($request, Closure $next) {
		$user          = Auth::user();
		$group_purview = $user->group_purview->toArray();
		$user_purview  = $user->purview->toArray();
		$this_route    = $request->getAccessName();

		dd($this_route);

		return $next($request);
	}
}
