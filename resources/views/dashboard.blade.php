@extends('layouts.masteradmin')
@section('content')
<style>
    h1,h2{
        text-align: center;
    }
   
</style>
    <h1>
        welcome !!!
        </h1>
        <h2>{{auth::user()->first_name}} {{auth::user()->last_name}}</h2>
@endsection