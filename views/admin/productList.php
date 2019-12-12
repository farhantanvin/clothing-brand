@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>All Product</title>
</head>
<body>
	<h1>Product List</h1>
	<a href="{{route(('home.index'))}}">Back</a>  

	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Product Name</td>
			<td>price</td>
			<td>quantity</td>
	
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