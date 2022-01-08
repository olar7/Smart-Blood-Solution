@extends('layouts.masteradmin')
@section('content')
<style>
h1{
    text-align: center;
}
.table {
    max-width:none;
    width: 100%;
}
#descbox{
    width: 30%;
   
}
#descbox p{
    text-align: justify;
    overflow: hidden;
    /* white-space: nowrap; */
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
}
</style>

<h1>Inbox</h1>
<br>
<table class="table">
    <thead>
        <tr id="">
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col" >Message</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @php($count = 1)
            @foreach ($contact as $item)
            <tr>
                <th scope="row">{{$count}}</th>
                <td>{{$item->full_name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->subject}}</td>
                <td id="descbox"><p>{{$item->message}}</p></td>
                
                <td>
                    <a href="{{route('messageview.show',['id' => $item->id])}}" class="btn btn-primary">view</a>
                    <a href="{{route('messageview.delete',['id' => $item->id])}}" class="btn btn-danger">Delete</a>
                   
                </td>

            </tr>
            @php($count++)
            @endforeach
            
        </tbody>
      </table>
@endsection