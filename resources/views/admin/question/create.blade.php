@extends('layouts.masteradmin')
@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Fill Survey</h3>
        </div>
        <br>
        <hr>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('question.store')}}" method="post" >
                @csrf
               
                <div class="form-group">
                    <label for="user">Type</label>
                    <select type="text" id="" name="type" class="form-control">
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
                
                <div class="form-group">
                    <label for="user">Last donation</label>
                    <input type="date" id="" name="last_donation" class="form-control">
                </div>

                <div class="form-group">
                    <label for="user">Number of donation</label>
                    <input type="number" id="" name="number_of_donations" class="form-control">
                </div>

                <div class="form-group">
                    <label for="user">Disease</label>
                    <input type="text" id="" name="diagnosed_disease" class="form-control">
                </div>
        
                
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection