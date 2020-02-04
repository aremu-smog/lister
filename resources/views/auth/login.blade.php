@extends('layouts.app')

@section('heading')
    <a href="/"><img src="/img/main/logo.svg" alt="Lister logo" /></a>
    
@endsection

@section('content')
<div class="container ">
    <div class="row form-wrapper">
        <div class="col-4 row row-center-x">
            <a href="/"></a>
            <img src="/img/main/guy pressing laptop.svg" alt="Guy pressing laptop">
        </div>
        <div class="col-4">
            <div class="form-container">
                <div class="text-green text-center text-bold"><h1>{{ __('Login') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="text-medium text-blue">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="text-regular @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-blue text-medium">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        
                        <div class="col-md-8 offset-md-4">
                            <label ></label>
                            <button type="submit" class="btn btn-green">
                                {{ __('Login') }}
                            </button>
                        </div>
                            
                        <div class="text-light text-left text-blue">
                                <label>&nbsp;</label>
                                <p>Don't have an account yet? <a href="/register" class="text-green">Register here</a></p>
                                
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4 row row-center-x">
            <img src="/img/main/lady pressing phone.svg" alt="Lady pressing Phone">
        </div>
    </div>
</div>
@endsection
