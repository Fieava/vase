<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use App\Models\WebTheme;

class WebThemeMid {
	public function __construct() {

	}

	public function handle($request, Closure $next) {
		$theme_name = WebTheme::find(Cookie::get('theme', 1));
		if ($theme_name) {
			$theme_name = $theme_name->name;
		} else {
			$theme_name = WebTheme::where('default', '=', 1)->orderby('id', 'DESC')->first()->name;
		}
		$request->theme_file_path = asset('/static/style/theme/' . $theme_name . '.css');

		return $next($request);
	}
}
