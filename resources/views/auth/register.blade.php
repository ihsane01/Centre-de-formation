@extends('layouts.app')

@section('content')
<div style="display:flex">
<div class="container"  style="margin: 80px;border:solid;border-color:black;width:40vw;height:65vh;border-radius:20px; background-color:white">

             

             
                <h1 style="margin:20px">Registrer</h1>
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        
                            <label for="name" style="margin-left:20px" >{{ __('Nom') }}</label>

                            <div class="col-md-11">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="margin-left:20px">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>

                        {{-- <div class="row mb-11">
                            <label for="profil" style="margin-left:20px">profile</label>

                            <div class="col-md-11">
                                <input  type="text" class="form-control"  name="profil" required autocomplete="name" autofocus style="margin-left:20px">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                       
                            <label for="email" style="margin-left:20px">{{ __('Email Address') }}</label>

                            <div class="col-md-11">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="margin-left:20px">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      

                       
                            <label for="password" style="margin-left:20px">{{ __('Password') }}</label>

                            <div class="col-md-11">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="margin-left:20px">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        

                        
                            <label for="password-confirm" style="margin-left:20px">{{ __('Confirm Password') }}</label>

                            <div class="col-md-11">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"style="margin-left:20px">
                            </div>
                        
                            
                           
                                <button type="submit" class="btn btn-outline-success" style="margin-left:25px;width:90px;margin-top:20px">
                                    {{ __('Register') }}
                                </button>
                                
                        
                        
                    </form>
                </div>

       
<div>
<img src="/css/logo.png" >
</div>
</div>
@endsection
