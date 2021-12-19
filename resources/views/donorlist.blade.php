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
          <tr>
            <th scope="row">1</th>
            <td>Ram Thapa</td>
            <td>01-4489153</td>
            <td> O-ve</td>
            <td> lalitpur</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Ram Thapa</td>
            <td>01-4489153</td>
            <td> O-ve</td>
            <td> lalitpur</td>
          </tr>
          
        </tbody>
      </table>


@endsection