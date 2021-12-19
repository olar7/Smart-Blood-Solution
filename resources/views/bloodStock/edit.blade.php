@extends('layouts.masteradmin')

@section('content')
    <!--Permission Edit Box Starts Here-->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">organization</h3>
        </div>
        <!--Box Body-->
        <div class="box-body">
            <!--Form Starts-->
            <form action="{{route('bloodstock.update', ['bloodstock' => $bloodstock->id])}}" method="post">
                @csrf
                @method('put')
               
                <div class="form-group">
                    <label for="user">Blood Type</label>
                    <input type="text" id="" name="blood_type" class="form-control" value="{{$bloodstock->blood_type}}">
                </div>
                <div class="form-group">
                    <label for="user">Blood group</label>
                    <input type="text" id="" name="blood_group" class="form-control" value="{{$bloodstock->blood_group}}">
                </div>
                <div class="form-group">
                    <label for="user">Collection Date</label>
                    <input type="date" id="" name="collected_date" class="form-control" value="{{$bloodstock->collected_date}}">
                </div>
                <div class="form-group">
                    <label for="user">Checkup Report</label>
                    <input type="text" id="" name="blood_checkup_report" class="form-control" value="{{$bloodstock->blood_checkup_report}}">
                </div>
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
               
            </form>
        </div>
    </div>
@endsection