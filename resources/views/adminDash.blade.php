@extends('layouts.masteradmin')
@section('content')
<style>
    .heading{
        margin-top: 20px;
    }
    .card-section{
     margin-left: 100px;
     margin-top: 200px;
     display: flex;
      
        
    }
.card{
    display: inline-block;
    border: 2px solid;
    height: 150px;
    width: 150px;
    margin-left: 40px;
    border-radius: 12px;
    
}
button{
    position: absolute;
    bottom: 0;
    margin-left: 40px;
}
</style>
<div class="container">
    <div class="heading">
        <h4> Welcome {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} !! </h4>
    </div>
    <div class="card-section">
        <div class="card">NO. of On-going Campaigns
            <hr>
            <div class="card-content">
                {{$campaign}}
            </div>
            <button a href="{{route('campaign.index')}}"type="button" class="btn btn-primary">View</button>
        </div>
        <div class="card">No. of Blogs
            <hr>
            <div class="card-content">
                {{$blog}}
            </div>
            <button type="button" class="btn btn-primary">View</button>
        </div>
        <div class="card">No. of blood Requests
            <hr>
             <div class="card-content">
                {{$blood_requests}}
            </div>
            <button type="button" class="btn btn-primary">View</button>
        </div>
        <div class="card">No. of associated Organizations
            <hr>
            <div class="card-content">
                {{$organization}}
            </div>
            <button type="button" class="btn btn-primary">View</button>
        </div>
        <div class="card">Inbox
            <hr>
            <div class="card-content">
                {{$contact}}
            </div>
            <button type="button" class="btn btn-primary">View</button>
        </div>
    </div>

</div>





@endsection