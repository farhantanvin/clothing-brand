@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Customer List</h1>
	<a href="{{route(('home.index'))}}">Back</a>  

	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Type</td>
	
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->userId}}</td>
			<td>{{$s->name}}</td>
			<td>{{$s->email}}</td>
			<td>{{$s->type}}</td>
			<td>
				<!-- <a href="{{route('admin.edit', $s->userId)}}">Edit</a> | --> 
				<a href="{{route('admin.delete', $s->userId)}}">Ban</a> | 
				<a href="{{route('admin.details', $s->userId)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>
@endsection