@extends('layouts.masteradmin')


@section('content')
    
    <style>
        .form-control{
            width: 500%;
            border: 2px solid;
            
            border-style: none;
            border-bottom: 2px solid;
            border-radius: 1px;
        }
</style>
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create a new admin</h3>
        </div>
        <br>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('register.create')}}" method="post">
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
    </div>
@endsection