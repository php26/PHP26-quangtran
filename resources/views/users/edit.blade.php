@extends('layouts.app')
@section('content')
	<div class="form-group">
		<form action="/users/{{$user->id}}" method="POST">
		{!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

			<label for="name">Username</label>
			<input type="text" name="name" value="{{ $user->name}}">
			<label>Password</label>
			<input type="password" name="password">
			<label>Email</label>
			<input type="email" name="email" value="{{$user->email}}">
			<button type="submit"> Update</button>

		</form>
	</div>
	
@endsection