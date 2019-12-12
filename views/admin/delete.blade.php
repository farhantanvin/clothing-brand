
@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Delete Customer</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
	<tr>
			<td>ID</td>
			@foreach($users as $s)
			<td>{{$s->userId}}</td>
		</tr>
		<tr>
			<td>NAME</td>
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

<form method="post">
	{{csrf_field()}}
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>


@endsection