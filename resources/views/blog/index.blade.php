@extends('layouts.master')

@section('content')
	<h1>Selamat Datang Di blog</h1>
	@foreach ($blogs as $blog)
		<li> <a href="/blog/{{ $blog->id }}"> {{ $blog->title }} </a>
			<form action="/blog/{{ $blog->id }}" method="POST">
				@csrf
				<input type="submit" value="Delete" name="submit">
				<input type="hidden" name="_method" value="DELETE">
			</form>
		</li>
	@endforeach
	{{ $blogs->links() }}
	
@endsection