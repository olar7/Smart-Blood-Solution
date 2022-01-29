@extends('layouts.master')
@section('content')
<style>
    .form-group {
        margin: 0px 30px;
    }

    .form-survey {
        border: 2px solid;
        height: 900px;
        margin: 0px 30px;
        margin-bottom: 20px;
    }
    .survey-btn{
        text-align: center;
        margin-bottom: 20px;
    }
    #survey-button{
        width: 30%;
        border: 2px solid;
        border-radius: 20px;
    }
    .form-group{
        margin: 10px 130px;
    }
</style>
<div class="main-container">
    <h2 style="text-align: center;">Fill The required information</h2>
    <div class="form-group">
        <form method="POST" action="{{route('bedonor.store')}}">
            @csrf

            <div class="mb-3">
                <label for="formGroupExampleInput2">Blood Group</label>
                <select id="inputState" class="form-control"  name="blood_group">
                    <option selected>Choose Blood Type</option>
                    <option>A+ ve</option>
                    <option>A- ve</option>
                    <option>B+ ve</option>
                    <option>b- ve</option>
                    <option>O+ ve</option>
                    <option>O- ve</option>
                    <option>AB+ ve</option>
                    <option>AB- ve</option>
              
                  </select>
              </div>

            {{-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Blood Type</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter your blood type" name="blood_type">
            </div> --}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Volume</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter Your current location" name="volume">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter Your current location" name="validation">
            </div>


         
            <textarea name="note" id="" cols="150" rows="10"></textarea>

            <br>
            <br>
    </div>
    
    <div class="survey-btn">
    <button class="btn btn-primary" type="submit" id="survey-button">Submit</button>
    </div>
    </form>

</div>
@endsection