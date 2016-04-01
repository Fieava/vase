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

		$group_access       = NULL;
		$group_purview_item = 0;
		$group_purview_auth = 0;
		$user_access        = NULL;

		foreach ($group_purview as $purview) {
			if ($purview['route_name'] == $this_route) {
				$group_purview_item++;
				if ($purview['available'] == 1) {
					$group_purview_auth++;
				}
			}
		}

		if ($group_purview_auth == $group_purview_item && $group_purview_item > 0) {
			$group_access = TRUE;
		} else {
			$group_access = FALSE;
		}

		foreach ($user_purview as $purview) {
			if ($purview['route_name'] == $this_route) {
				if ($purview['available'] == 1) {
					$user_access = TRUE;
				} else {
					$user_access = FALSE;
				}
			}
		}

		if ($user_access || (is_null($user_access) && $group_access)) {
			// granted
		} else {
			if ($request->ajax() || $request->wantsJson()) {
				return response('Forbidden.', 403);
			} else {
				return response(view('errors.403'), 403);
			}
		}

		return $next($request);
	}
}
