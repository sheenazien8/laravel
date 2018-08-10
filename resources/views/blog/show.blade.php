@extends('layouts.master')

@section('content')
	<h1>Selamat Datang Di blog</h1>
	<h3>{{ $blog }}</h3>
	@foreach ($users as $user)
		<p>{{ $user }}</p>
	@endforeach
	<p>Saya Sheena Belajar basic laravel</p>
@endsection
{{-- 	@foreach ($users as $user)
		
	@endforeach --}}