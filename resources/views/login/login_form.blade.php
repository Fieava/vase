@extends('frame.single_page_frame')
@section('title','User Login')
@section('description','Login Page')
@section('keywords','')

@section('content')
	<div id="single_login_container">
		<div id="single_login"  style="background-image: url('{{ $WebData['wallpaper']['url'] }}')"></div>
		<div id="single_login_content">
			<span id="site_name">Vase - A project tracing & co-work site</span>
			<form method="post" action="login">
				{{ csrf_field() }}
				<input class="login_input" placeholder=" User" name="username" type="text" value="">
				<input class="login_input" placeholder=" Password" name="password" type="password" value="">
				<span id="prompt">@if($errors){{ $errors->first() }}@endif</span>
				<input class="login_submit" type="submit" value="Login">
			</form>
		</div>
	</div>
	<span id="wallpaper_text">Background Image: {{ $WebData['wallpaper']['text'] }}</span>
@endsection