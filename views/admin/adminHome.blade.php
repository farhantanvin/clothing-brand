@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	
	<h1>Welcome to Admin Home! {{session('user'.'$username')}}</h1>
	<a href="{{route('admin.add')}}">Add Product</a> | 
	<a href="{{route('admin.index')}}">Customer List</a> | 
	<a href="{{route('product.list')}}">Poduct List</a> | 
	<table>
	<tr>
			<!-- <td>ID</td> -->
			@foreach($users as $s)
			<td>{{$s->userId}}</td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td>{{$s->username}}</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>{{$s->password}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$s->type}}</td> @endforeach
		</tr>
	</table>
	
</body>
</html>



@endsection