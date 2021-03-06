@extends('layouts.master')

@section('content')
	<form action="/blog/store" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="text" name="title" value="{{ old('title') }}">
			@if ($errors->has('title'))
				<p>{{ $errors->first('title') }}</p>
			@endif
		<br>
		<input type="text" name="description" value="{{ old('title') }}">
			@if ($errors->has('description'))
				<p>{{ $errors->first('description') }}</p>
			@endif
		<br>
		<input type="file" name="gambar">
		<br>
		<input type="submit" name="submit" value="store">
	</form>
@endsection
