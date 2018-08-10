@extends('layouts.master')

@section('content')
	@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	@endif
	<form action="/blog" method="POST">
		@csrf
		<input type="text" name="title">
		<br>
		<input type="text" name="description">
		<br>
		<input type="submit" name="submit" value="store">
	</form>
@endsection
