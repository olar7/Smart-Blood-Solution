@extends('layouts.masteradmin')
@section('content')
<style>
    .heading{
        margin-top: 20px;
    }
    .card-section{
     display: flex;
     margin-top: 10px;   
    }
.card{
    display: inline-block;
    border: 2px solid;
    height: 120px;
    width: 250px;
    margin-left: 40px;
    border-radius: 12px;
    /* text-align: center; */
    box-shadow: 5px 5px black;
    
    
}

.graphchart{
        /* height: 500px; */
        /* width: 600px; */
        width: 100%;
        box-sizing: border-box;
        margin-top: 50px;
        /* border: 2px solid black; */
        display: flex;
        
    }
    .box-chart
    {
        margin-left: 40px;
        border: 2px solid black;
        border-radius: 12px;
        /* background-color: rgb(241, 241, 241); */
        box-shadow: 5px 5px black;
    }
    
    #adminChart{
       margin: 20px;
       /* border: 2px solid black; */
       height: 200px;
       width: 300px;
    }
    #adminChart2{
       margin: 20px;
       /* border: 2px solid black; */
       height: 200px;
       width: 700px;
    }
    .card-content i{
       float: right;
       margin-right: 20px;
       margin-top: 10px;
    }
    .card-content p{
        word-spacing: 5px;
        font-weight: bold;
        margin-left: 10px;
    }

    .list-container{
        /* border: 2px solid; */
        margin-top: 40px;
       
    }

    .list-container div{
        margin-left :30px;
        display: inline-block;
        
        
    }
    .table{
        /* border: 2px solid; */
    }
    .blood-request-list {
        margin: 20px;
        float: left;
        border: 1px solid rgb(196, 194, 194);
        border-radius: 12px;
        width: 60%;
        box-shadow: 5px 5px rgb(196, 194, 194);
    }
    .client-list{
        margin: 15px;
        float: right; 
        border: 1px solid rgb(196, 194, 194);
        border-radius: 12px; 
        width: 30%;
        box-shadow: 5px 5px rgb(196, 194, 194);
    }

    #client-table{
        background-color: #557A95;
        color: white;
        font-weight: bold;
    }
    .list-head button{
      /* margin-left: 565px;
      display: inline-block; */
      float: right;
      margin:5px 50px;
    }
     .list-head{
         width: 100%;
         margin: 5px;
     }
     .list-head h2{
         display: inline-block;
     }
     .list-head a{
         color: white;
         text-decoration: none;
     }
     #dash-img{
         height: 80px;
         width: 80px;
         border-radius: 50%;
     }
     .org-list p{
        /* text-align: center; */
        margin-left: 20px;
         font-weight: bold;
         display: inline-block;
         margin-top: 10px;
     }
     .org-list{
         display: block;
         width: 70%;
         margin: 20px;
     }
     .client-list h4{
         margin: 10px;
         font-weight: bold;
     }
     .card-content h1{
         margin-left:15px;
     }
</style>

<div class="container">
    <div class="card-section">
        <div class="card">
            <div class="card-content">
                <i class="fas fa-location-arrow fa-2x"></i>
                <h1>{{$campaign}}</h1>
                <p>No.of Ongoing Campaigns</p> 
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <i class="fas fa-blog fa-2x"></i>
                <h1>{{$blog}}</h1>
                <p>No.of Blogs</p> 
            </div>
         
        </div>
        <div class="card">
             <div class="card-content">
                <i class="fas fa-tasks fa-2x"></i>
                <h1>{{$blood_requests}}</h1>
                <p>Blood Requests</p> 
            </div>
           
        </div>
        <div class="card">  
            <div class="card-content">
                <i class="fas fa-building fa-2x"></i>
                <h1>{{$organization}}</h1>
                <p>No.of Associated Organizations</p> 
            </div>
           
        </div>
        <div class="card">
            <div class="card-content">
                <i class="fas fa-inbox fa-2x"></i>
                <h1>{{$contact}}</h1>
                <p>Inbox</p> 
            </div>
           
        </div>
    </div>

</div>

<div class="graphchart">
    <div class="box-chart" id="box-1">
    <canvas id="adminChart"></canvas>
    </div>
    <div class="box-chart" id="box-2">
        <canvas id="adminChart2"></canvas>
    </div>
</div>

<div class="list-container">
    <div class="client-list">
        <h4 style="text-align: center">Organizations</h4>
        @foreach ($organizationList as $item)
            
        <div class="org-list">
            <img src="{{url('images/')}}/{{$item->logo}}" alt="" srcset="" id="dash-img">
            <p><a href="{{route('orgprofile',['id'=>$item->id])}}">{{$item->user->first_name}} {{$item->user->last_name}}</a> <br>
                {{$item->user->address}}</p>
            </div>
            @endforeach
    </div>


    <div class="blood-request-list">
        <div class="list-head">
        <h2>Blood Requests</h2>
        <button type="button" class="btn btn-primary" ><a href="/admin/adminvalidation"> View All</a></button>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">Recipient</th>
                <th scope="col">Location</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Contact</th>
              </tr>
            </thead>
            <tbody>
                @php($count = 1)
                @foreach ($requestBlood as $item)
                <tr>
                        <th scope="row">{{$count}}</th>
                        <td>{{$item->first_name}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->blood_group}}</td>
                        <td>{{$item->contact}}</td>
                    </tr>
                    @php($count++)
                @endforeach
            </tbody>
          </table>
    </div>
</div>

{{-- Javascript section --}}
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<script>const ctx = document.getElementById('adminChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['campaign', 'organization','Admin','Blood Requests'],
            datasets: [{
                data: [{{$campaign}}, {{$organization}},{{$admin_no}},{{$blood_requests}}],
                backgroundColor: [
                    '#E12800',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                    '#F4FF00'
                ],
                borderColor: [
                       'black'
                       ],
                       borderWidth: 2
            }]
        },
       
    });</script>

    <script>const rtx = document.getElementById('adminChart2').getContext('2d');
        const mChart = new Chart(rtx, {
            type: 'bar',
            data: {
                labels: ['Campaigns', 'organization', 'Blood Requests', 'Inbox', 'Clients', 'Admins','Blogs'],
                datasets: [{
                    label: 'Graph Chart',
                    data: [{{$campaign}}, {{$organization}},{{$blood_requests}},{{$contact}},2,{{$admin_no}},{{$blog}}],
                    backgroundColor: [
                        '#E12800',
                        '#002DFF',
                        '#F4FF00',
                        '#00E11D',
                        '#330101',
                        '#073301',
                        '#00FFF9'
                    ],
                    borderColor: [
                       
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });</script>





@endsection