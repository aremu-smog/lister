@extends('layouts.app')

@section('heading')
    <a href="/"><img src="/img/main/logo.svg" alt="Lister logo" /></a>
    
@endsection

@section('content')
<div class="container">
    <div class="row form-wrapper row-mobile-wrap ">
            <div class="col-4 row row-center-x">
                    <a href="/"></a>
                    <img src="/img/main/guy pressing laptop.svg" alt="Guy pressing laptop">
                </div>
        <div class="col-4 col-mobile-full">
            <div class="form-container">
                <div class="text-green text-bold text-center"><h1>{{ __('Register') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class="text-medium text-blue">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="e.g John Doe" type="text" class="text-regular @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="text-medium text-blue">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" placeholder="e.g name@domain.com" type="email" class="text-regular @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                                <label for="phone" class="text-medium text-blue">{{ __('Phone number') }}</label>
    
                                <div>
                                    <input id="phone" placeholder="e.g 2348100112233" type="text" class="text-regular @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="password"  class="text-medium text-blue">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Your desired password" type="password" class="text-regular @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="text-medium text-blue">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Kindly confirm your password" type="password" class="text-regular" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                       
                            <div>
                                <label ></label>
                                <button type="submit" class="btn btn-green">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </form>
                    <div class="text-light text-left text-blue">
                        <label >&nbsp;</label>
                        <p>Already have an account? <a href="/login" class="text-green">Login here</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 row row-center-x">
                <img src="/img/main/lady pressing phone.svg" alt="Lady pressing Phone">
            </div>
    </div>
</div>
@endsection
