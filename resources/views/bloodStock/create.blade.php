@extends('layouts.masteradmin')
@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create a new stock</h3>
        </div>
        <br>
        <hr>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('bloodstock.store')}}" method="post" >
                @csrf
                @if ($organizations != '')
                    <div class="form-group">
                        <label for="">Stock</label>
                        <select name="organization_id" id="" class="form-control">
                            <option value="" disabled>Select Organization</option>
                            @foreach ($organizations as $org)
                                <option value="{{$org->id}}">{{$org->user->first_name}} {{$org->user->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                <div class="form-group">
                    <label for="user">Blood Type</label>
                    <input type="text" id="" name="blood_type" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="user">Blood group</label>
                    <input type="text" id="" name="blood_group" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Collection Date</label>
                    <input type="date" id="" name="collected_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Checkup Report</label>
                    <input type="text" id="" name="blood_checkup_report" class="form-control">
                </div>
                
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection