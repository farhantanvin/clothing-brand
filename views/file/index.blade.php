@extends('layouts.app')
@section('content')
<div class="container">
	@if(session('success'))
		<div class="alert alert-success">
			<strong>{{ session('success') }}</strong>
		</div>
	@endif
	
	<div class="row">
		@foreach($files as $file)
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="{{asset('storage/' . $file->image)}}">
				<div class="card-body">
					<strong class="card-title">Product Name: {{ $file->name }}</strong>
					</br>
					<strong class="card-title">Description: {{ $file->description }}</strong>
				</br>
					<strong class="card-title">Price: {{ $file->price }}</strong>
					<form action="{{ route('deletefile', $file->id) }}" method="post">
						@csrf
						@method('DELETE')
						&nbsp &nbsp &nbsp &nbsp &nbsp
						
						<a href="" class="btn btn-success">Add To Cart</a>
						</br>
						
					</form>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection