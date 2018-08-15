@extends('layouts.app')
@section('content')
	<div class="form-group">
		<form action="{{route('cats.update', $cat->id)}}" method="POST">
		{!! csrf_field() !!}
		<input type="hidden" name="_method" value="PUT">
			<label for="name">Name</label>
			<input type="text" name="name" value="{{$cat->name}}">
			<label>Date of birth</label>
			<input type="text" name="dob" value="{{$cat->dob}}">
			<button type="submit"> Update</button>

		</form>
	</div>

@endsection
