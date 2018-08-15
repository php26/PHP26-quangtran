@extends('layouts.app')
@section('content')
	<div class="form-group">
		<form action="{{route('cats.store')}}" method="POST">
		{!! csrf_field() !!}
			<label for="name">Name</label>
			<input type="text" name="name">
			<label>Date of birth</label>
			<input type="text" name="dob">
			<button type="submit"> Create</button>

		</form>
	</div>

@endsection
