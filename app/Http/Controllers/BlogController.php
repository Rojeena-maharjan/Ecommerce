<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

use App\Comment;
class BlogController extends Controller
{
    public function index()
    {
    	$blogs = Blog::all();
    	return view('blog.index',compact('blogs'));

    }

    public function create()
    {
    	return view('blog.create');
    	
    }

    public function store(Request $request)
    {
    	Blog::create($request->all());
    	return redirect()->route('blog.index');
    	
    }

     public function show($id)
    {
    	$data = Blog::find($id);

    	return view('blog.show',compact('data'));
    }
}
