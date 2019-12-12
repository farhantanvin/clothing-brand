@extends('layouts.app')
@section('content')
<div class="container">
	@if(session('success'))
		<div class="alert alert-success">
			<strong>{{ session('success') }}</strong>
		</div>
	@endif
	<p>
		<a href="{{ route('home') }}" class="btn btn-primary">Standard View</a>
		<a href="{{ route('mosaic') }}" class="btn btn-primary">Mosaic View</a>
	</p>
	<div class="row">
		@foreach($files as $file)
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="{{ Storage::url($file->path)}}"  height="228">
				<div class="card-body">
					<strong class="card-title">{{ $file->title }}</strong>
					<p class="card-text">{{ $file->created_at->diffForHumans() }}</p>
					<form action="{{ route('deletefile', $file->id) }}" method="post">
						@csrf
						@method('DELETE')
						&nbsp &nbsp &nbsp &nbsp &nbsp
						<button type="submit" class="btn btn-danger">Delete</button>
						<a href="" class="btn btn-warning">Edit</a>
						<a href="{{ route('downloadfile', $file->id) }}" class="btn btn-success">Download</a>
					</form>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection