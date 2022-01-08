@extends('layouts.master')
@section('content')
    
<style>
    footer{
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

<form action="{{route('sms.index')}}" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Phone number</label>
            <input type="number" class="form-control" id="" name="phone" placeholder="">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Message</label>
            <textarea name="message" id="" cols="150" rows="10" ></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

@endsection