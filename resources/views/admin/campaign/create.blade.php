@extends('layouts.masteradmin')
@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create New campaign</h3>
        </div>
        <br>
        <hr>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('campaign.store')}}" method="post" enctype="multipart/form-data" >
                @csrf
                @if ($organizations != '')
                    <div class="form-group">
                        <label for="">Organization</label>
                        <select name="organization_id" id="" class="form-control">
                            <option value="" disabled>Select Organization</option>
                            @foreach ($organizations as $org)
                                <option value="{{$org->id}}">{{$org->user->first_name}} {{$org->user->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                <div class="form-group">
                    <label for="user">Campaign Title</label>
                    <input type="text" id="" name="title" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="user">Date</label>
                    <input type="date" id="" name="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">photo</label>
                    <input type="file" id="" name="photo" class="form-control">
                </div>
                <div class="form-group">
                <label for="user">Content</label>
                <br>
                    <textarea id="" name="description" rows="10" cols="150">
                    
                    </textarea>
                </div>

                
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection