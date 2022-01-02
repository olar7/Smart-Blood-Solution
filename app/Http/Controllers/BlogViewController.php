<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogViewController extends Controller
{
   public function index(){
       $blog = Blog::orderBy('created_at', 'DESC')->take(5)->get();
       return view('blogs')->with('blog',$blog);
   }

//    public function profile(){
//     $blog = Blog::orderBy('created_at', 'DESC')->take(1)->get();
//     return view('blogdetails')->with('blog',$blog);
// }
}
