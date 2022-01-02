@extends('layouts.masteradmin')

@section('content')
    <!--Permission Edit Box Starts Here-->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">organization</h3>
        </div>
        <!--Box Body-->
        <div class="box-body">
            <!--Form Starts-->
            <form action="{{route('blog.update', ['blog' => $blog->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
               
                <div class="form-group">
                    <label for="user">Blog Title</label>
                    <input type="text" id="" name="title" class="form-control" value="{{$blog->title}}">
                </div>
                <div class="form-group">
                    <label for="user">Author Name</label>
                    <input type="text" id="" name="author" class="form-control" value="{{$blog->author}}">
                </div>
                
                <div class="form-group">
                    <label for="user">Date</label>
                    <input type="date" id="" name="date" class="form-control"value="{{$blog->date}}">
                </div>

                <div class="form-group">
                    <label for="user">Image</label>
                    <input type="file" id="" name="image" class="form-control"value="{{$blog->image}}">
                </div>
                
        
                <div class="form-group">
                <label for="user">Content</label>
                <br>
                    <textarea id="" name="content" rows="10" cols="150">
                    {{$blog->content}}
                    </textarea>
                </div>
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
               
            </form>
        </div>
    </div>
@endsection