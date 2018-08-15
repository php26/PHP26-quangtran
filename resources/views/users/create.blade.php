@extends('layouts.app')
@section('content')
	<div class="form-group">
		<form action="/users" method="POST">
		{!! csrf_field() !!}
			<label for="name">Username</label>
			<input type="text" name="name">
			<label>Password</label>
			<input type="password" name="password">
			<label>Email</label>
			<input type="email" name="email">
			<button type="submit"> Create</button>

		</form>
	</div>
	
@endsection