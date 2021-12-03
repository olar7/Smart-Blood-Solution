@extends('layouts.masteradmin')
@section('content')

<style>
    .form-control{
        width: 350%;
    }
</style>
<h2>Add New Organization</h2>
<br>
<div class="addusersform">
    <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Full Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email Address</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Organization Type</label>
    <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Goverment</option>
        <option>Private</option>
      </select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Location</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
  
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
  <br>
 <br>

  <button type="button" class="btn btn-primary">Add new</button>
</form>
</div>
@endsection