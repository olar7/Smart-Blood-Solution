@extends('layouts.masteradmin')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Full Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Location</th>
            <th scope="col">blood_group</th>
            <th scope="col">validation</th>
            <th scope="col">Note</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @php($count = 1)
            @foreach ($guest as $item)
            <tr>
                <th scope="row">{{$count}}</th>
                <td>{{$item->first_name}}</td>
                <td>{{$item->contact}}</td>
                <td>{{$item->location}}</td>
                <td>{{$item->blood_group}}</td>
                <td><img src="{{url('images/')}}/{{$item->validation}}" alt="" width="100"></td>
                <td>{{$item->note}}</td>
                <td>
                    <a href="{{route('validation.show',['id' => $item->id])}}" class="btn btn-primary">view</a>
                    {{-- <a href="{{route('email.dispatch',['id' => $item->id])}}" class="btn btn-primary">Send</a> --}}
                    <a href="{{route('validation.destroy',['id' => $item->id])}}" class="btn btn-danger">Delete</a>
                </td>

            </tr>
            @php($count++)
            @endforeach
            
        </tbody>
      </table>
@endsection