@extends('layouts.master')
@section('content')
<style>
    p{
        margin-top: 50px;
        text-align: justify;
        margin: 5px 40px;
    }
</style>
<div >
   <p>
    In context of Nepal the blood donation and management system is mostly manual, cumbersome and inefficient. Most blood banks record the information on blood collection/supply manually in registers. This creates a problem if someone is in need of blood urgently and the only way to search the inventory is through registers.  
    <br>
Even at hospitals in emergency situation is very difficult. Many people face a lot of difficulties in getting blood at hospital facility. Hospitals issue a blood requisition form to the patient family and family member had to rush to the blood bank in order to get the service. This is a highly tedious in a stressful mind and people might not be psychologically strong enough to withstand the pain and this process might get more cumbersome once the same person had to deal with blood bank.  
<br> 
   
    our goal is to make blood donation easier because Blood donation is a vital part of worldwide healthcare. It allows for blood transfusion as a life-sustaining and life-saving procedure. Over one hundred million units of blood are donated each year throughout the world. This activity reviews donor eligibility and selection, adverse effects of donation, and pathogen reduction and inactivation for donated blood.</p>
</div>
<br>
<br>
<h2>Can you answer some of our survey questions ?</h2>
<br>
<br>

<form action="{{route('question.store')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Have you been Daiagnosed with any disease</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="diagnosed_disease">
      <br>
      <label for="exampleInputEmail1">When did you last donate Blood</label>
      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="last_donation">
     
      <label for="exampleInputEmail1">Number of previous donations</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number_of_donations">
     
      <div class="mb-3">
        <label for="formGroupExampleInput2">What is your blood type ? </label>
        <select id="inputState" class="form-control"  name="type">
            <option selected>Choose your Blood Type</option>
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
    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection