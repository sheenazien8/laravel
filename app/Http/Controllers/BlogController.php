<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;


class BlogController extends Controller
{
	public function index()
	{
		$blogs = Blog::all();
		return view('blog.index', ['blogs' => $blogs]);
	}

	public function show($id)
	{
		$nilai = "nilai dari link " .$id;
		$blogs = Blog::find($id);

		return view('blog.show', ['blog' => $nilai, 'blogs' => $blogs]);
	}
}
