@extends('layouts.masteradmin')


@section('content')
<style>
        .form-1control{
            width: 100%;
            border: 2px solid;
            
            border-style: none;
            border-bottom: 2px solid;
            border-radius: 1px;
        }
        #frm-logo{
            border: 2px solid black;
        }
</style>
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"> Organization Create</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('organization.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="user_type">Role</label>
                    <input type="hidden" name="user_type_id" id="" value="{{$user_type->id}}">
                    <input type="text" name="" id="" value="{{$user_type->user_type}}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="user">Organization name</label>
                    <input type="text" id="" name="org_name" class="form-1control">
                </div>
                <div class="form-group">
                    <label for="user">Email</label>
                    <input type="email" id="" name="email" class="form-1control">
                </div>
                <div class="form-group">
                    <label for="user">password</label>
                    <input type="text" id="" name="password" class="form-1control">
                </div>
                <div class="form-group">
                    <label for="user">Slogan</label>
                    <input type="text" id="" name="slogan" class="form-1control">
                </div>
               
                <div class="form-group">
                    <label for="user">address</label>
                    <input type="text" id="" name="address" class="form-1control">
                </div>
                <div class="form-group">
                    <label for="user">Contact</label>
                    <input type="text" id="" name="contact" class="form-1control">
                </div>
               
                <div class="form-group">
                    <label for="user">Logo</label>
                    <input type="file" id="frm-logo" name="logo" class="form-control">
                </div>
                <div class="form-group">
                <label for="user">Description</label>
                <br>
                    <textarea id="" name="description" rows="3" cols="150" class="form-1control">
                    
                    </textarea>
                </div>
                <input type="hidden" name="user_id" value='1'>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection