<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function index()
	{
		return "halo";
	}

	public function show($id)
	{
		$nilai = "nilai dari link " .$id;
		$users = [
			'Sheena','Roki','Koko'
		];
		return view('blog.show', ['blog' => $nilai, 'users' => $users]);
	}
}
