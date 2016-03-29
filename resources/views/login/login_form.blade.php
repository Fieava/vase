@extends('frame.single_page_frame')
@section('title','User Login')
@section('description','')
@section('keywords','')

@section('content')
	<div id="single_login">
		<span id="site_name">Vase - A project tracing & co-work site</span>
		<span id="prompt"></span>
		<form method="post" action="">
			{{ csrf_field() }}
			<input class="login_input" placeholder="" style="margin-right: 73px;" name="username" type="text" value="">
			<input class="login_input" placeholder="" name="password" type="password" value="">
			<input class="login_submit" type="submit" value="Login">
		</form>
	</div>
@endsection