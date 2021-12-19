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
            <form action="{{route('question.update', ['question' => $question->id])}}" method="post">
                @csrf
                @method('put')
               
                <div class="form-group">
                    <label for="user">Type</label>
                    <select type="text" id="" name="type" class="form-control">
                    <option selected >{{$question->type}}</option>
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
                    <input type="date" id="" name="last_donation" class="form-control" value ="{{$question->last_donation}}">
                </div>

                <div class="form-group">
                    <label for="user">Number of donation</label>
                    <input type="number" id="" name="number_of_donations" class="form-control" value ="{{$question->number_of_donations}}">
                </div>

                <div class="form-group">
                    <label for="user">Disease</label>
                    <input type="text" id="" name="diagnosed_disease" class="form-control" value ="{{$question->diagnosed_disease}}">
                </div>
        
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
               
            </form>
        </div>
    </div>
@endsection