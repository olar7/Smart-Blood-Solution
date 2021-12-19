@extends('layouts.masteradmin')

@section('content')
    <!--Permission Edit Box Starts Here-->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Update</h3>
        </div>
        <!--Box Body-->
        <div class="box-body">
            <!--Form Starts-->
            <form action="{{route('blood.update', ['blood' => $blood->id])}}" method="post">
                @csrf
                @method('put')
               
                <div class="form-group">
                    <label for="user">Blood group</label>
                    <input type="text" id="" name="blood_group" class="form-control" value ="{{$blood->blood_group}}">
                </div>
                
                <div class="form-group">
                    <label for="user">Blood_type</label>
                    <input type="text" id="" name="blood_type" class="form-control" value ="{{$blood->blood_type}}">
                </div>

                <div class="form-group">
                    <label for="user">Volume</label>
                    <input type="text" id="" name="volume" class="form-control" value ="{{$blood->volume}}">
                </div>

                <div class="form-group">
                    <label for="user">Validation Image</label>
                    <input type="file" id="" name="validation" class="form-control" value ="{{$blood->validation}}">
                </div>

                <div class="form-group">
                <label for="user">Note</label>
                <br>
                    <textarea id="" name="note" rows="10" cols="150">
                    {{$blood->note}}
                    </textarea>
                </div>
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
               
            </form>
        </div>
    </div>
@endsection