<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="language" content="zh-CN">
	<meta name="description" content="@yield('description')"/>
	<meta name="keywords" content="@yield('keywords')"/>
	<link href="{{ asset('/static/style/index.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/static/style/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ $WebData['theme_file_path'] }}" rel="stylesheet" type="text/css">
</head>
<body>
<script src="{{ asset('/static/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/static/js/browser.js') }}"></script>
<header id="main_bar">
	<div id="avatar"><img src="https://avatars2.githubusercontent.com/u/7803638?v=3&s=40"/></div>
	<span id="user_name" title="Fieava">Fieava</span>
	<nav id="main_nav">

	</nav>
</header>
<nav id="sub_nav">
	s
</nav>
<section id="content">
	@yield('content')
</section>
<aside id="side_task_list">
	t
</aside>
</body>
</html>
