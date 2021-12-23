@extends('layouts.master')
@section('content')
<style>
    /* .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    } */

    .campaign-image img{
        width: 80%;
        height: 450px;
        /* margin-left: 80px; */
        /* border: 2px solid; */
        border-radius: 12px;
    }
    .campaign-container{
        margin-left: 80px;
    }
    .campaign-title{
        margin-right: 285px;
    }
    .campaign-title p{
        text-align: justify;
    }
    .campaign-container{
        margin-top: 20px;
    }
</style>
<div class="campaign-container">

    @foreach ($campaign as $item)
        
    <div class="campaign-head">
        <h1>{{$item->title}}</h1>
        <br>
        <h3>{{$item->date}}</h3>
    </div>
    <div class="campaign-image">
        <img src="{{url('images/')}}/{{$item->photo}}" alt="" srcset="">
    </div>
    <br>
    <div class="campaign-title">
        <p>{{$item->description}}</p>
        
    </div>
    @endforeach
</div>
@endsection