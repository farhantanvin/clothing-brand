
@extends('layouts.app')
@section('content')




<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Customer Details</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	
	
	<table border="1">
		<tr>
			<td>ID</td>
			@foreach($users as $s)
			<td>{{$s->userId}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$s->name}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$s->email}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$s->type}}</td> @endforeach
		</tr>
	</table>
	
</body>
</html>


@endsection