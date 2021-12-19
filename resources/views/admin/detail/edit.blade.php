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
    <!--Permission Edit Box Starts Here-->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">details</h3>
        </div>
        <!--Box Body-->
        <div class="box-body">
            <!--Form Starts-->
            <form action="{{route('detail.update', ['detail' => $detail->id])}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="user">Donor Name</label>
                    <input type="text" id="" name="donor_name" class="form-1control" value ="{{$detail->donor_name}}">
                </div>
                <div class="form-group">
                    <label for="user">Donor Nationality</label>
                    <input type="text" id="" name="donor_nationality" class="form-1control" value ="{{$detail->donor_nationality}}">
                </div>
               
                <div class="form-group">
                    <label for="user"> Contact</label>
                    <input type="text" id="" name="donor_contact" class="form-1control" value ="{{$detail->donor_contact}}">
                </div>
               
                <div class="form-group">
                    <label for="user">Location</label>
                    <input type="text" id="" name="donor_location" class="form-1control" value ="{{$detail->donor_location}}">
                </div>
                <div class="form-group">
                    <label for="user">Test status</label>
                    <input type="text" id="" name="test_status" class="form-1control" value ="{{$detail->test_status}}">
                </div>
               
        
                <div class="form-group">
                <label for="user">Description</label>
                <br>
                    <textarea id="" name="description" rows="3" cols="150" class="form-1control">
                    {{$detail->description}}
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