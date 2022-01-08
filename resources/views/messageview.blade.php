@extends('layouts.masteradmin')
@section('content')
    {{$contact->full_name}}
    <br>
    {{$contact->email}}
    <br>
    {{$contact->subject}}
    <br>
    {{$contact->message}}
    
@endsection