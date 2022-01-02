@extends('layouts.master')
@section('content')
<style>
    .main-container{
        /* border: 2px solid; */
        /* height: 800px; */
        /* margin: 10px 80px; */
        /* display: flex; */
    }
    .blog-post{
        display: inline-block;
        border: 2px solid;
        border-radius: 12px;
        height: 580px;
        width: 25%;
        margin: 30px 40px;
        overflow: hidden;
        box-shadow: 10px 10px rgb(51, 50, 50);
    }
    .blog-img img{
        height: 200px;
        width: 90%;
        border-radius: 12px;
        margin-left: 20px;
        margin-top: 10px;
        box-shadow: 4px 4px  rgb(22, 22, 22);
    }
    
    .blog-content{
        text-align: justify;
        width: 85%;
        margin: 10px 30px;
    }
    .blog-content p{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 7;
        -webkit-box-orient: vertical;

    }
    .author-date p{
        text-align: center;
    }
    .link{
        margin-left:30px;

    }
    .link a{
        text-decoration: none;
    }
    .blog-title{
        margin-left: 20px;
        margin-top: 10px;
    }
</style>
    <div class="main-container">
        {{-- blog-card start --}}
        @foreach ($blog as $item)
            
        <div class="blog-post" id="Card-1" >
            <div class="blog-img">
               <img src="{{url('images/')}}/{{$item->image}}" alt="" srcset=""> 
            </div>
            <div class="blog-title">
                <h3>{{$item->title}}</h3>
            </div>
            <div class="blog-content">
                <p>{{$item->content}}</p>
            </div>
            <div class="link">
                <a href="{{route('blogView',['id'=>$item->id])}}">Read More</a>
            </div>
            <div class="author-date">
                <p><i class="fas fa-user"> : {{$item->author}}</i></p>
                <p><i class="fas fa-calendar"> : {{$item->date}}</i> </p>
            </div>
        </div>
        {{-- blog card end --}}
        @endforeach
    </div>
    @endsection