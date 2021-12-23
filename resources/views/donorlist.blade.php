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
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Blood-Group</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
          
              @php($count = 1)
          @foreach ($detail as $item)
          <tr>
            <th scope="row">{{$count}}</th>
            <td>{{$item->donor_name}}</td>
            <td>{{$item->donor_contact}}</td>
            <td>{{$item->test_status}}</td>
            <td> {{$item->donor_location}}</td>
          </tr>
          @php($count++)
          @endforeach
         
          
        </tbody>
      </table>


@endsection