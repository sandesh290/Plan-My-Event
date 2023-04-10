@extends('layouts.frontend')
@section('auth_content')

<div  class="container">
    <div class="row justify-content-center">
        <div class="col-md-6" style="display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 120px;">
            <div style="  
            text-aling:center;
            width: 500px;
            left: 0px;
            top: 0px;
            background: rgba(217, 217, 217, 0.43);
            border-radius: 20px;
            "  class="card">

                <div style="font-size: 20px;
                                    
                background-color: rgba(218, 217, 217, 0);
                "  class="card-header">{{ __('LogIn') }}</div>

                <div  class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="text-center">
                        @csrf
                        <div class="row mb-3 d-flex align-items-center justify-content-center">

                            <div class="col-md-8">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center justify-content-center">

                            <div class="col-md-8">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button style="
                                margin-left: 20px;
                                text-aling:center;
                                width: 150px;
                                background: #FF7800;
                                border-radius: 10px;" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <br> 
                                    <span style="color: black;" >New Here?</span>
                                    <a href="/register  ">
                                        {{ __('Create account') }}
                                    </a>   
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



