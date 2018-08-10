@extends('layouts.master')

@section('content')
	<form action="/blog/{{ $blogs->id }}" method="POST">
		@csrf
		<input type="text" name="title" value="{{ $blogs->title }}" 	>
		<br>
		<input type="text" name="description" value="{{ $blogs->description }}" 	>
		<br>
		<input type="submit" name="submit" value="edit">
		<input type="hidden" name="_method" value="put">
	</form>

@endsection
