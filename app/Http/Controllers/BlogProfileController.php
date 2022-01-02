<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogProfileController extends Controller
{
    public function index(){
        // $blog = Blog::orderBy('created_at', 'DESC')->take(1)->get();
        // return view('blogdetails')->with('blog',$blog);
    }
}
