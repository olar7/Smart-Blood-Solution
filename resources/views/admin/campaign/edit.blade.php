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
            <form action="{{route('campaign.update', ['campaign' => $campaign->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
               
                <div class="form-group">
                    <label for="user">Blog Title</label>
                    <input type="text" id="" name="title" class="form-control" value="{{$campaign->title}}">
                </div>
                
                <div class="form-group">
                    <label for="user">Date</label>
                    <input type="date" id="" name="date" class="form-control"value="{{$campaign->date}}">
                </div>
                <div class="form-group">
                    <label for="user">photo</label>
                    <input type="file" id="" name="photo" class="form-control">
                </div>
        
                <div class="form-group">
                <label for="user">Content</label>
                <br>
                    <textarea id="" name="description" rows="10" cols="150">
                    {{$campaign->description}}
                    </textarea>
                </div>
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
               
            </form>
        </div>
    </div>
@endsection