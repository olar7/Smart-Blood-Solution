@extends('layouts.app') 
@section('content')
<style>
    
    .card{
        border:5px solid linear-gradient(90deg, rgba(2,0,36,1) 47%, rgba(121,9,9,1) 100%, rgba(0,212,255,1) 100%);
        margin: 120px 180px;
        border-radius: 6px;
        width: 50%;
        /* height: 60%; */
        
        
    }
    .card-header{
        background-color: white;
        border:none;
        text-align:center;
        margin-bottom: 10px;
        font-weight: bolder;
        font-size: large;
    }
    .col-md-6 input{
        border: none;
        border-bottom: 2px solid;
        border-radius: 1px;
        width: 200%; 
        }
    .col-md-6 input::placeholder{
        /* color: black;
         */
         font-weight: bold;
        /* text-align: center; */
    }
    .col-md-6{
        margin: auto;
        display: inline-block;
        margin: 3px 0px;

    }
    #check{
        margin-left: 2px;
    }

    #hidden{
        display: none;
    }
    .links{
        margin-left: -30px;
    }

    .links a{
        text-decoration: none;
        /* color: black; */
    }
    .col-md-8 button{
        border: 2px solid;
        border-radius: 8px;
        padding: 8px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Already a Member ?') }}</div>
                <br>
               

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address : </label> -->

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address">

                                @error('email ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right"> Password : </label> -->

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row" >
                            <div class="col-md-5 offset-md-4" id="check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign-in') }}
                                </button>
                               
                               
                                <div class="links">
                                    <br>
                                @if (Route::has('register'))
                                    <div class="register-link">
                                    <a class="btn btn-link" href="{{ route('register') }}">{{ __('Create an Account ') }}</a>
                                    </div>
                                
                            @endif

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
