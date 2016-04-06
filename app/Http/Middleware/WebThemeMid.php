<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use App\Models\WebTheme;
use App\Models\Settings;

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

		//TODO: get Bing's wallpaper. need some code for timezone and language problem
		if (Settings::where('name', '=', 'page.wallpaper_date')->first()->value != date('Ymd')) {
			$wallpaper_data        = json_decode(file_get_contents('http://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=zh-CN'));
			$wallpaper_date        = Settings::where('name', '=', 'page.wallpaper_date')->first();
			$wallpaper_date->value = $wallpaper_data->images[0]->startdate;
			$wallpaper_date->save();
			$wallpaper_url = Settings::where('name', '=', 'page.wallpaper_url')->first();
			if (strpos($wallpaper_data->images[0]->url, 'bing.net')) {
				$wallpaper['url'] = $wallpaper_url->value = $wallpaper_data->images[0]->url;
			} else {
				$wallpaper['url'] = $wallpaper_url->value = 'http://www.bing.com' . $wallpaper_data->images[0]->url;
			}
			$wallpaper_url->save();
			$wallpaper_text    = Settings::where('name', '=', 'page.wallpaper_text')->first();
			$wallpaper['text'] = $wallpaper_text->value = $wallpaper_data->images[0]->copyright;
			$wallpaper_text->save();
		} else {
			$wallpaper['url']  = Settings::where('name', '=', 'page.wallpaper_url')->first()->value;
			$wallpaper['text'] = Settings::where('name', '=', 'page.wallpaper_url')->first()->value;
		}

		$request->wallpaper = $wallpaper;

		return $next($request);
	}
}
