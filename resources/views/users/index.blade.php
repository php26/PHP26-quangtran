@extends('layouts.app')
@section('content')
	<a href="{{route('users.create')}}">Create User</a>
	<h1>List User</h1>
	<table style="width:100%">
		<tr>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Action</th>
		</tr>
	@foreach($users as $item)
		<tr>
		    <td>{{$item->name}}</td>
		    <td>{{$item->email}}</td>
		    <td>
		    <form action="{{route('users.delete', $item->id)}}" method="POST">
		    	{{ csrf_field()}}
		    	<input type="hidden" name="_method" value="DELETE">
		    	<button type="submit" class="btn btn-danger">Delete user</button>
		    </form>
		    </td>
		</tr>
	@endforeach
	</table>
@endsection