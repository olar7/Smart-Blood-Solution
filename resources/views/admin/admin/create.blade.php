@extends('layouts.masteradmin')


@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">@lang('create') @lang('')</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('admin.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="user">First name</label>
                    <input type="text" id="" name="first_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Last name</label>
                    <input type="text" id="" name="last_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Email</label>
                    <input type="email" id="" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Alternative Email</label>
                    <input type="email" id="" name="alt_email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">password</label>
                    <input type="text" id="" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">contact</label>
                    <input type="text" id="" name="contact" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">address</label>
                    <input type="text" id="" name="address" class="form-control">
                </div>
                <input type="hidden" name="user_type_id" value='1'>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div><!--Permission Create Form Ends Here-->
@endsection