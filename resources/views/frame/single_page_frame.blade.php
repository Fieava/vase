<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') - Vase</title>
	<meta charset="UTF-8">
	<meta name="description" content="@yield('description')" />
	<meta name="keywords" content="@yield('keywords')" />
	<link href="{{ asset('/static/style/index.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/static/style/single_page.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/static/style/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ $WebData['theme_file_path'] }}" rel="stylesheet" type="text/css">
</head>
<body id="single_page_body" style="background-image: url('{{ $WebData['wallpaper']['url'] }}')">
<script src="{{ asset('/static/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/static/js/browser.js') }}"></script>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" valign="middle">
			<table>
				<tr>
					<td>
						@yield('content')
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>