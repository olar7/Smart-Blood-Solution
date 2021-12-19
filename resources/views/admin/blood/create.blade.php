@extends('layouts.masteradmin')
@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create New Info</h3>
        </div>
        <br>
        <hr>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('blood.store')}}" method="post" enctype="multipart/form-data" >
                @csrf
               
                <div class="form-group">
                    <label for="user">Blood group</label>
                    <input type="text" id="" name="blood_group" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="user">Blood_type</label>
                    <input type="text" id="" name="blood_type" class="form-control">
                </div>

                <div class="form-group">
                    <label for="user">Volume</label>
                    <input type="text" id="" name="volume" class="form-control">
                </div>

                <div class="form-group">
                    <label for="user">Validation Image</label>
                    <input type="file" id="" name="validation" class="form-control">
                </div>

                <div class="form-group">
                <label for="user">Note</label>
                <br>
                    <textarea id="" name="note" rows="10" cols="150">
                    
                    </textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection