<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index')->with('blogs', $blog);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $blog = Blog::all();
        $admin= '';
        if(Auth::user()->user_type_id == 1){
            $admin = Admin::all();
        }
        return view('admin.blog.create')->with('admin', $admin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $blogImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $blogImage);
            $input['image'] = $blogImage;
        }

        
        
        // $admin = Auth::user()->admin->id;
        // dd($admin);
        
        $blog = Blog::create([
            'admin_id'=> Auth::user()->admin->id,
            'title'=> $input['title'],
            'author'=> $input['author'],
            'date'=> $input['date'],
            'image'=> $input['image'],
            'content'=> $input['content'],
        ]);
        
        // $input['admin_id'] = Auth::user()->admin->id;
        // Blog::create($input);
        // dd($input);
        return redirect()->route('blog.index');

        
      

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        return view('admin.blog.edit',compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $organizationImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $organizationImage);
            $input['image'] = $organizationImage;

        }
        
        $admin = $blog->admin;
        $blog->update([
            'admin_id'=> $admin->id,
            'title'=> $input['title'],
            'author'=> $input['author'],
            'date'=> $input['date'],
            'image'=> $input['image'],
            'content'=> $input['content'],
        ]);
        // $blog->update($request->all());
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->route('blog.index');
    }

    public function blogView($id){

        $blog = Blog::find($id);
        return view('blogdetails',compact('blog'));
    }
}
