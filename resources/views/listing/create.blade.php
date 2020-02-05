@extends('layouts.app')
@include('partials.navbar')
@section('heading')

    <h1 class="text-white text-white">List your product/service</h1>
    
@endsection

@section('content')
<div class="container">
    <div class="row form-wrapper">
            <div class="col-4 row row-center-x">
                    <a href="/"></a>
                    <img src="/img/main/guy pressing laptop.svg" alt="Guy pressing laptop">
                </div>
        <div class="col-4">
            <div class="form-container">
                <div class="text-green text-bold text-center"><h1></h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('listing.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class="text-medium text-blue">{{ __('Business name') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="e.g John Doe" type="text" class="text-regular @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- E-mail -->
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

                        <!-- Phone -->
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

                        <!-- Webiste -->
                        <div>
                                <label for="website" class="text-medium text-blue">{{ __('Website') }}</label>
    
                                <div>
                                    <input id="website" placeholder="e.g www.domain.com" type="text" class="text-regular @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" autocomplete="website">
    
                                    @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div>
                            <label for="address" class="text-medium text-blue">{{ __('Business Address') }}</label>

                            <div>
                                <textarea name="address" id="address" rows="3" class="text-regular"></textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="bio" class="text-medium text-blue">{{ __('Bio') }}</label>

                            <div>
                                <textarea name="bio" id="bio" rows="3" class="text-regular"></textarea>

                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="image" class="text-medium text-blue">{{ __('Business Image') }}</label>

                            <div>
                                <input id="image" placeholder="e.g 2348100112233" type="file" class="text-regular @error('phone') is-invalid @enderror" name="image" value="{{ old('image') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        

                       
                            <div>
                                <label ></label>
                                <button type="submit" class="btn btn-green">
                                    {{ __('List product/service') }}
                                </button>
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
