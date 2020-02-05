<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lister</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="icon" href="/img/main/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        @include('partials.navbar')
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
            </div>
        </div> --}}

        <section class="intro row row-center-xy">
            <div class="container row">
                <div class="col-5">
                    <div>
                        <p class="text-white">The best business listing website for</p>
                        <p><span class="text-green">entrepreneurs</span></p>
                        <a href="/register" class="btn btn-green">Get started</a>
                    </div>
                    
                </div>
                <div class="col-1"></div>
                <div class="col-6 row ">
                    <img src="/img/main/landing-illustration.svg" alt="Welcome Illustration">
                </div>
            </div>
        </section>

        
        <div class="recent-listings">
            <section class="container">
                <header class="text-center">
                    <h1 class="text-blue text-bold">Recent Listings</h1>
                </header>

                @include('partials.listings')
            </section>
        </div>

        <section class="hero">
            <div class="container row">
                <div class="col-1"></div>
                <div class="col-4 row row-center-x">
                    <img src="/img/main/hero illustration.svg" alt="Hero Illustration">
                </div>
                <div class="col-6 row row-center-y">
                    <div class="">
                        <h1 class="text-blue text-bold">
                            Thousands of people are <br> waiting to know what you sell
                        </h1>
                        <a href="/register" class="btn btn-green">List your business</a>
                    </div>
                </div>
            </div>
        </section>
        
        @include('partials.footer')
    </body>
</html>
