<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
	public function index()
	{
		return "halo";
	}

	public function show($id)
	{
		$nilai = "nilai dari link " .$id;

		// DB::table('users')->insert([
		// 	"username" => 'juli',
		// 	"password" => 12454
		// ]);

		// DB::table('users')->where('username','juli')->update([
		// 	"username" => 'lili'
		// 	// "password" => 12454
		// ]);
		DB::table('users')->where('id', '>', 3)->delete();
		$users = DB::table('users')->get();
		return view('blog.show', ['blog' => $nilai, 'users' => $users]);
	}
}
