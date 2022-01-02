@extends('layouts.masteradmin')
@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create New Blogs</h3>
        </div>
        <br>
        <hr>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data" >
                @csrf
                
               
                <div class="form-group">
                    <label for="user">Blog Title</label>
                    <input type="text" id="" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="user">Author Name</label>
                    <input type="text" id="" name="author" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="user">Date</label>
                    <input type="date" id="" name="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="user">Image</label>
                    <input type="file" id="" name="image" class="form-control">
                </div>
        
                <div class="form-group">
                <label for="user">Content</label>
                <br>
                    <textarea id="" name="content" rows="10" cols="150">
                    
                    </textarea>
                </div>
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection