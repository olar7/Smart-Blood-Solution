@extends('layouts.master')
@section('content')

<style>
       .container{
            /* border: 2px solid; */
            margin: 10px 50px;
        }
        .blog-heading{
            /* border: 2px solid green; */
            text-align: center;
        }
        .blog-date-author p{
            margin-left: 100px;
            display: inline-block;
            font-weight: bold;
            font-size: 15px;
            margin-top: 20px;
        }
        .blog-elements img{
            margin-top: 10px;
            width: 400px;
            height: 400px;
            float: right;
            margin-right: 50px;
            margin-left: 20px;
            border-radius: 12px;
        }
        
        .blog-elements{
            margin-top: 50px;
        }
        .blog-elements p{
            text-align: justify;
            margin: 10px 45px;
            line-height: 35px;
            
        }
    </style>
<div class="container">
    <div class="blog-heading">
        
        <h1>{{$blog->title}}</h1>
    </div>

    <div class="blog-date-author">
        <p>By {{$blog->author}}</p> <p>Date : {{$blog->date}}</p>
    </div>

    <div class="blog-elements">
        <img src="{{url('images/')}}/{{$blog->image}}" alt="" srcset="">
        <p>{{$blog->content}}</p>

      
    </div>
</div>
  
       
      
  
       
     
       
  
@endsection