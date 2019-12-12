@extends('layouts.app')
@section('content')
<div class="container">
	@if(session('success'))
		<div class="alert alert-success">
			<strong>{{ session('success') }}</strong>
		</div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<img class="img" src="{{ Storage::url($file->path)}}">
			<div class="body">
				<form>
					<input type="text" name="tittle" value="{{ $files->title }}">
					<input type="text" name="description" value="{{ $files->description }}">
				</form>
				<button type="submit" class="btn btn-success">Rotate Left</button>
				<button type="submit" class="btn btn-success">Rotate Right</button>
			</div>
		</div>
	</div>
</div>
@endsection