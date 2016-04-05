<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="@yield('description')"/>
	<meta name="keywords" content="@yield('keywords')"/>
	<link href="{{ asset('/static/style/index.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/static/style/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ $WebData['theme_file_path'] }}" rel="stylesheet" type="text/css">
</head>
<body>
<script src="{{ asset('/static/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/static/js/browser.js') }}"></script>
<header>
	<div id="header_image">
		<div id="header_image_cover"></div>
	</div>
	<section id="header" class="width_limit">
		<div id="logo_div">
			<div id="logo"></div>
			<div id="site_name"><span id="site_name_chinese">成都公交巴士数据库</span><br/><span id="site_name_english">Public Bus Database Of ChengDu</span>
			</div>
		</div>
		<div id="user_box">
			<div id="user_level" class="user_level_1">
				<div class="user_level_symbol_1" title="通行级别">1</div>
			</div>
			<a id="user_login" href="#">Fieava</a>
			<a id="user_log_action" href="#">快捷搜索</a>
			<a id="user_log_action" href="#">退出登陆</a>
			<a id="user_message" href="#" class="user_message_notice fa fa-envelope-o"></a>
			{{--<a id="user_message" href="#" class="user_message_notice_new fa fa-envelope"></a>--}}
		</div>
		<div class="clear"></div>
	</section>
</header>
<nav id="nav">
	<div id="nav_line"></div>
	<div id="nav_bar">
		<div class="width_limit">
			<div id="path_menu_box">
				<div id="now_path">
					<ul class="path_menu_list">
						<li><a href="#" class="path_link">首页</a></li>
						<li><a href="#" class="path_link">公司</a></li>
						<li><a href="#" class="path_link">车辆</a></li>
						<li><a href="#" class="path_link">线路</a></li>
						<li><a href="#" class="path_link">站点</a></li>
					</ul>
					<ul class="path_menu_list">
						<li><a href="#" class="path_link">车辆 V#5700</a></li>
						<li><a href="#" class="path_link">车辆 V#5927</a></li>
						<li><a href="#" class="path_link">车辆 V#5305</a></li>
					</ul>
					<ul class="path_menu_list">
						<li><a href="#" class="path_link">线路</a></li>
					</ul>
					<ul class="path_menu_list">
						<li><a href="#" class="path_link">线路 R#570</a></li>
						<li><a href="#" class="path_link">线路 R#571</a></li>
					</ul>
					<div id="path_menu_info">快捷导航栏由 PBDCD 独家为您提供</div>
				</div>
			</div>
		</div>
	</div>
	@yield('nav')
</nav>
<section id="content">
	<div class="width_limit">
		@yield('content')
	</div>
</section>
<footer>
	<section id="site_info">
		<div class="width_limit"></div>
	</section>
</footer>
</body>
</html>
