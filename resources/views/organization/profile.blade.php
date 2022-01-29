@extends('layouts.master')
@section('content')

<style>
    
    .profile-header{
        border: 2px solid;
        height: 150px;
        background-color: #557A95;
        box-shadow: 5px 5px black;
        margin: 0px 10px;
        border-radius: 12px;
    }
    .profile-img{
        /* border: 2px solid red; */
        /* height: 50px; */
        /* width: 20%; */
        /* margin-top: 50px; */
        display: inline-block; 
    }
    .profile-img img{
        width: 120px;
        height: 120px;
        border-radius: 12px;
        margin-top: 10px;
        margin-left: 15px;
    }
    .profile-info{
        /* border: 2px solid green; */
        /* height:70px; */
        width: 70%;
        float: right;
        display: inline-block;
        margin-right: 305px;
        margin-top: 30px;
        color: white;
        
    }
    /* profile body starts here */
    .additional-info{
        border: 2px solid;
        display: flex;
        height: 50px;
        border-radius: 12px;
        /* box-shadow: 5px 5px black; */
        background-color: #557A95;
        color: white;
        
    }
    .additional-info ul{
        display: flex;
        align-items: center;
        margin-top:10px;
        
    }
    .additional-info ul li{
        margin-left: 100px;
        list-style: none;
        
    }

    li span{
        font-weight: bold;
    }
    /* profile body ends here */

    /* organization-campaign section */
    .profile-body{
        border: 5px solid;
        border-radius: 12px;
        height: 1200px;
        margin: 10px 10px;
    }
    .profile-content{
        /* border: 2px solid green; */
        /* height: 250px; */
        margin-top: 50px;
    }

    .campaign-list{
        /* border: 2px solid; */
        /* height: 200px; */
        width: 47%;
        display: inline-block;
        float: left;
        margin-left: 30px;
        
    }

    .camp-card{
        border: 2px solid ;
        border-radius: 12px;
        height: 120px;
        width: 90%;
        margin: 20px 30px;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        /* justify-content: center; */
        
    }
    .camp-img img{
        border: 5px solid;
        width: 100px;
        height: 100px;
        display: inline-block;
        border-radius: 12px;
        margin-left: 10px;
    }
    .camp-card p{
        margin-left: 20px;
        font-weight: bold;
    }
    .camp-card a{
        margin-left: 40px;
        text-decoration: none;
        border: 2px solid;
        padding: 8px;
        border-radius: 12px;
        color: white;
        background-color: #557A95;
        margin-bottom: 20px;
    }
  /* organization campaign section ends */

    /* organization inventory section */

    .inventory-section{
        /* border: 2px solid red; */
        /* height: 100px; */
        display: inline-block;
        width: 47%;
        margin-right: 30px;
        float: right;
    }
    .table{
        border: 2px solid;
        margin: 20px 0px;
    }
    #table-head{
        background-color: #557A95;
        color: white;
    }
    .organization-description p{
        margin: 20px 50px;
        text-align: justify;
    }
</style>
<div class="main-container">
    {{-- header starts here --}}
    <div class="profile-header">
        
            
        <div class="profile-img">
            
            <img src="{{url('images/')}}/{{$organization->logo}}" alt="" srcset="">
        </div>
        <div class="profile-info">
            <h4>{{$organization->user->first_name}} {{$organization->user->last_name}}</h4>
            <p>{{$organization->slogan}}</p>
            <p>{{$organization->user->address}}</p>
            
        </div>
    </div>
    {{-- header ends here --}}
    
    {{-- Profile Body Starts Here --}}
    <div class="profile-body">
        <div class="additional-info">
            <ul>
                <li><span>Email-Address :</span> {{$organization->user->email}} </li>
                <li> <span>Contact :</span> {{$organization->user->contact}}</li>
                <li> <span>Address :</span> {{$organization->user->address}}</li>    
            </ul>
        </div>
        <div class="organization-description">
            <h2 style="text-align: center">About us</h2>
            <p>{{$organization->description}}</p>
        </div>
        
        <div class="profile-content">
        <div class="campaign-list">
           <h3 style="text-align: center">Campaign List</h3>
           @foreach ($campaign as $item)
               
           <div class="camp-card">
               <div class="camp-img">
                <img src="{{url('images/')}}/{{$item->photo}}" alt="" srcset=""> 
                </div>
                <p>Name: {{$item->title}}</p>
                <p> Date : {{$item->date}}</p>
                <a href="{{route('campaignView',['id'=>$item->id])}}">View Details</a>
                
            </div>
            @endforeach
            
            
        </div>
        <div class="inventory-section">
            <div class="inv-table">
                <h3 style="text-align: center">Inventory</h3>
                <table class="table">
                    <thead>
                      <tr id="table-head">
                        <th scope="col">S.N</th>
                        <th scope="col">Blood-Group</th>
                        <th scope="col">Report</th>
                        
                        <th scope="col">Collected date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php($count = 1)
                        @foreach ($bloodstock as $item)
                            
                        <tr>
                            <th scope="row">{{$count}}</th>
                            <td>{{$item->blood_group}}</td>
                            <td>{{$item->blood_checkup_report}}</td>
                            
                            <td>{{$item->collected_date}}</td>
                        </tr>
                        @php($count++)
                        @endforeach
                        
                    </tbody>
                  </table>
            </div>
        </div>
      
    </div>
    {{-- Profile Body ends here --}}
</div>

@endsection