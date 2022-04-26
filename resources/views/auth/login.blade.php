@extends('layouts.app')

@section('content')

<div style="display:flex">
<div class="container" style="margin: 80px;border:solid;border-color:black;width:40vw;border-radius:20px; background-color:white">

<h1 style="margin:20px">Login</h1>
                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                       
                            <label for="email" >{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                       
                            <label for="password" >{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                                <div style="width:20vw;margin-left:25px">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label  for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <br>
                        

                        
                                <button type="submit" class="btn btn-outline-success" style="margin-left:25px;width:90px">
                                    {{ __('Login') }}
                                </button>
                                <br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-bottom:10px;color:black">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                   
                                @endif
                         
                    </form>
                </div>
            

<div >
<img src="/css/logo.png">
</div>
</div>

@endsection
