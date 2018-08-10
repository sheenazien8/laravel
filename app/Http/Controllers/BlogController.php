<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Blog;
use App\Mail\BlogPosted;

class BlogController extends Controller
{
	public function index()
	{
		// $blogs = new Blog;
		// // insert biasa
		// $blogs->title = "Halo Jepara";
		// $blogs->description = "Halo sekarang aku ada di Jepara";
		// $blogs->save();

		// Insert Assignmen
		// Blog::create([
		// 	'title' => 'Halo Jepara',
		// 	'description' => "oke bro aku disini"
		// ]);

		// Update Biasa
		// $blogs = Blog::where('title','Halo Kawan')->first();
		// $blogs->title = "Halo Kudus";
		// $blogs->save();

		// Update Assignmen
		// Blog::find(4)->update([
		// 	'title' => 'halo lampung',
		// 	'description' => 'Sekarang kamu ada di lampung'
		// ]);

		// delete
		// $blogs = Blog::find(1);
		// $blogs->delete();

		// destroy
		// Blog::destroy([4,5]);

		// soft delete
		// $blogs = Blog::find(3);
		// $blogs->delete();

		$blogs = Blog::paginate(10);
		return view('blog.index', ['blogs' => $blogs]);
	}

	public function show($id)
	{
		$nilai = "nilai dari link " .$id;
		$blogs = Blog::find($id);

		if (!$blogs) {
			abort(404);
		}

		return view('blog.show', ['blog' => $nilai, 'blogs' => $blogs]);
	}

	public function create()
	{
		return view('blog.create');
	}

	public function store(Request $request)
	{
		$validation = $request->validate([
 			"title" => 'required|min:5|',
 			"description" => 'required|min:3',
 			"gambar" => "mimes:jpeg,png,jpg"
		]);

		// upload file
		$fileName = time().".png";
		$request->file('gambar')->storeAs('public/blog', $fileName);
		$blog = new Blog;
		$blog->create([
			'title' => $request->title,
			'description' => $request->description,
			'gambar' => $fileName
		]);

		// mengirim email
		Mail::to("sheena@email.com")->send(new BlogPosted($blog));
		return redirect('/blog');
		// return redirect()->route('test');
	}

	public function edit($id)
	{
		$blogs = Blog::find($id);
		return view('blog.edit', ['blogs' => $blogs]);
	}

	public function update(Request $request, $id)
	{
		Blog::find($id)->update([
			'title' => $request->title,
			'description' => $request->description
		]);

		return redirect('/blog/'.$id);
	}

	public function destroy($id)
	{
		$blogs = Blog::find($id);
		$blogs->delete();

		return redirect('/blog');
	}

	public function testing(Request $request)
	{
		if($request->isMethod("GET")){
			dd('ini adalah GET');
		}else {
			dd('ini adalah POST');
		}
	}
}
