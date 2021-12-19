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
            <h3 class="box-title"> details</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('detail.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="user">Organization name</label>
                    <input type="text" id="" name="donor_name" class="form-1control">
                </div>
                <div class="form-group">
                    <label for="user">Email</label>
                    <input type="text" id="" name="donor_nationality" class="form-1control">
                </div>
               
                <div class="form-group">
                    <label for="user">Slogan</label>
                    <input type="text" id="" name="donor_contact" class="form-1control">
                </div>
               
                <div class="form-group">
                    <label for="user">address</label>
                    <input type="text" id="" name="donor_location" class="form-1control">
                </div>
                <div class="form-group">
                    <label for="user">Contact</label>
                    <input type="text" id="" name="test_status" class="form-1control">
                </div>
               
        
                <div class="form-group">
                <label for="user">Description</label>
                <br>
                    <textarea id="" name="description" rows="3" cols="150" class="form-1control">
                    
                    </textarea>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection