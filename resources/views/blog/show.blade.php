@extends('layouts.master')

@section('content')
	<h1>Selamat Datang Di blog</h1>
	<h3>{{ $blogs->title }}</h3>

	<hr>
	<img src="{{ asset('storage/blog/'.$blogs->gambar) }}" alt="">
	<p>
		{{ $blogs->description }}
	</p>

@endsection
{{-- 	@foreach ($users as $user)
		
	@endforeach --}}