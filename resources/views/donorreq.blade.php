@extends('layouts.master')
@section('content')
<style>
  .main-container{
    display: flex;
    border: 2px solid;
    flex-direction: row;
    width: 100%;
    
  }
  .map-container{
    width: 50%;
    border: 2px solid;
  }
  .form-container{
    border: 2px solid;
    width: 50%;
    
  }
  .mb-3{
    margin: 10px 20px;
  }
  .form-btn{
    margin: 0 250px;
  }
 .form-btn button{
   width: 100%;
 }
</style>
<div class="main-container">
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.024699275488!2d85.34285451552107!3d27.685631482800932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19501b567565%3A0x451ad64db982c0b4!2sKantipur%20Hospital%20Blood%20Transfusion%20Service!5e0!3m2!1sen!2snp!4v1638025899897!5m2!1sen!2snp" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="form-container">
      <h2 style="text-align: center;">Request a Donor </h2>
      <form action="{{route('guest.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Full Name" name="first_name">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Contact no</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Contact Number"  name="contact">
        </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Location</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your current location"  name="location">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Upload a picture</label>
  <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your current location"  name="validation">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2">Blood Group</label>
  <select id="inputState" class="form-control"  name="blood_group">
      <option selected>Choose Blood Type</option>
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
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message Us</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your message to our Available donors"  name="note"></textarea>
</div>
<div class="form-btn">
<button type="submit" class="btn btn-primary" id="form-button">Send</button>
</div>
</form>
    </div>
</div>
@endsection