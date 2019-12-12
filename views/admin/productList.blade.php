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

	 @foreach($product as $s)
		<tr>
			<td>{{$s->id}}</td>
			<td>{{$s->name}}</td>
			<td>{{$s->price}}</td>
			<td>{{$s->quantity}}</td>
			<td>
				
				<a href="{{route('admin.delete', $s->id)}}">Edit Product</a> | 
				<a href="{{route('Product.delete', $s->id)}}">delete</a>


			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>


@endsection