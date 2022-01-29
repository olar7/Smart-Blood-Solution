@extends('layouts.master')
@section('content')

<style>
    .table{
        border: 3px solid;
        width: 90%;
        margin : auto;
        margin-top: 20px;
        
    }
    .footer{
          position:absolute;
          bottom: 0;
          width: 100%;
        }
</style>
    <title>Donors</title>
  </head>
  <body>

      
      <table class="table" >
        <thead class="thead-dark" >
          <tr class="table-dark">
            <th scope="col">S.N</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Blood volume</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
          
              @php($count = 1)
          @foreach ($detail as $item)
          <tr>
            <th scope="row">{{$count}}</th>
            <td>{{$item->blood_group}}</td>
            <td>{{$item->volume}}</td>
            <td>{{$item->client->user->first_name}} {{$item->client->user->last_name}}</td>
            <td>{{$item->client->user->contact}}</td>
            <td> {{$item->client->user->address}}</td>
          </tr>
          @php($count++)
          @endforeach
         
          
        </tbody>
      </table>


@endsection