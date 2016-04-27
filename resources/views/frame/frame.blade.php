<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="language" content="zh-CN">
	<meta name="description" content="@yield('description')" />
	<meta name="keywords" content="@yield('keywords')" />
	<link href="{{ asset('/static/style/index.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/static/style/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/static/style/jquery-ui.structure.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ $WebData['theme_file_path'] }}" rel="stylesheet" type="text/css">
</head>
<body>
<section id="top_section">
	<header id="main_bar">
		<div id="avatar"><img src="{{ asset('storage/avatar/1/7803638.png') }}" /></div>
		<span id="user_name" title="Fieava">Fieava</span>
		<nav id="main_nav">
			<div id="nav_project" class="nav_item" onclick="load_sub_nav(this, 'sub_nav/projects');"><i class="fa fa-archive fa-2x"></i></div>
			<div id="nav_model" class="nav_item" onclick="load_sub_nav(this, 'sub_nav/models');"><i class="fa fa-cogs fa-2x"></i></div>
			<div id="nav_task" class="nav_item" onclick="load_sub_nav(this, 'sub_nav/tasks');"><i class="fa fa-flag fa-2x"></i></div>
			<div id="nav_setting" class="nav_item" onclick="load_sub_nav(this, 'sub_nav/settings');"><i class="fa fa-sliders fa-2x"></i></div>
			<div id="nav_message" class="nav_item" onclick="load_sub_nav(this, 'sub_nav/messages');"><i class="fa fa-comments fa-2x"></i></div>
			<div id="nav_help" class="nav_item nav_item_end" onclick="load_sub_nav(this, 'sub_nav/help');"><i class="fa fa-question-circle fa-2x"></i></div>
		</nav>
	</header>
	<nav id="sub_nav"></nav>
	<section id="content"></section>
	<aside id="side_task_list"></aside>
</section>
<footer></footer>
<script src="{{ asset('/static/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/static/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/static/js/jquery-ui-timepicker-addon.js') }}"></script>
<script src="{{ asset('/static/js/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('/static/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/static/js/functions.js') }}"></script>
<script src="{{ asset('/static/js/browser.js') }}"></script>
</body>
</html>
