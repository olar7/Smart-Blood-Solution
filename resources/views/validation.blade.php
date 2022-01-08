@extends('layouts.masteradmin')
@section('content')
<style>
    img{
        height: 100px;
        width: 100px;
    }
</style>
<h2>View Page</h2>
<br>
Name :{{$adminvalidation->first_name}}
<br>
Requested Blood-Type : {{$adminvalidation->blood_group}}
<br>
Image Proof : <img src="{{url('images/')}}/{{$adminvalidation->validation}}" class="card-img-top" alt="...">
<br>
Extra Message : {{$adminvalidation->note}}
<br>
<br>
<a href="{{route('email.dispatch',['id' => $adminvalidation->id])}}" class="btn btn-primary">Dispatch Message</a>
<a href="{{route('sms.dispatch',['id' => $adminvalidation->id])}}" class="btn btn-primary">Dispatch SMS</a>

@endsection