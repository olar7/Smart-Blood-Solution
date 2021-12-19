@extends('layouts.masteradmin')
@section('content')
<h4> Welcome {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} !! </h4>
@endsection