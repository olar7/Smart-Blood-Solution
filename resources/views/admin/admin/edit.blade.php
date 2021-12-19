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
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Information</h3>
        </div>
        <!--Box Body-->
        <div class="box-body">
            <!--Form Starts-->
            <form action="{{route('admin.update', ['admin' => $admin->id])}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="user">First name</label>
                    <input type="text" id="" name="first_name" value ="{{$admin->user->first_name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Last name</label>
                    <input type="text" id="" name="last_name" value ="{{$admin->user->last_name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Email</label>
                    <input type="email" id="" name="email" value ="{{$admin->user->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Alternative Email</label>
                    <input type="email" id="" name="alt_email" value ="{{$admin->alt_email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">password</label>
                    <input type="text" id="" name="password" value ="{{$admin->user->password}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">contact</label>
                    <input type="text" id="" name="contact" value ="{{$admin->user->contact}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">address</label>
                    <input type="text" id="" name="address" value ="{{$admin->user->address}}" class="form-control">
                </div>
                <input type="hidden" name="user_type_id" value='1'>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection