@extends('layouts.master')

@section('content')
	<h1>Selamat Datang Di blog</h1>
	@foreach ($blogs as $blog)
		<li>{{ $blog->title }}</li>
	@endforeach
	
@endsection