@extends('layouts.frontend')
@section('auth_content')
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8" style="display: flex;
                    align-items: center;
                    justify-content: center;
                    padding-top: 120px;"    >
                    <div style="  
                            text-aling:center;
                            width: 500px;
                            left: 0px;
                            top: 0px;
                            background: rgba(217, 217, 217, 0.43);
                            border-radius: 20px;
                            " 
                    class="card">

                        <div style="font-size: 20px;
                                    
                                    background-color: rgba(218, 217, 217, 0);
                                    " 
                            class="card-header">{{ __('Register Here') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3 align-items-center justify-content-center">

                                    <div class="col-md-8  ">
                                        <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center justify-content-center"> 

                                    <div class="col-md-8">
                                        <input id="email"  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center justify-content-center">

                                    <div class="col-md-8">
                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center justify-content-center">

                                    <div class="col-md-8">
                                        <input id="password-confirm" placeholder="Confrom Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb">
                                    <div class="col-md-10 offset-md-4">
                                        <button style="
                                                    margin-left: 20px;
                                                    text-aling:center;
                                                    
                                                    background: #FF7800;
                                                    border-radius: 10px;" type="submit" class="btn btn-primary">
                                            {{ __('SignUp') }}
                                        </button>
                                        <br>
                                    </div>
                                    <div class="col-md-10 offset-md-2">
                                        <samp>
                                            Already have an account?</span>
                                            <a href="/login  ">
                                                {{ __('LogIn') }}
                                            </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection