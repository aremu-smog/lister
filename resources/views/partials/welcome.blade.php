<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lister</title>
        <link rel="icon" href="/img/main/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        @include('partials.navbar')

       <section class="welcome bg-blue row row-center-xy ">
            <div class="row container row-mobile-wrap row-mobile-reverse">
                <div class="col-6 row row-center-xy col-mobile-full welcome-illustration">
                    <img src="/img/main/welcome illustration.svg" class="welcome-illustration" alt="Welcome illustration">
                </div>
                <div class="col-4 col-mobile-full">
                    <div class="info">
                        <h1 class="text-green text-bold text-lg heading-mobile">{{Auth::user()->name}}</h1>
                        <p class="text-white text-light">
                            You are just a step away from getting your products and services in front of thousands of people.
                        </p>
                        <label ></label>
                        <a href="/listing/create" class="btn btn-green btn-mobile-lg">List your product/service</a>
                    </div>
                </div>
            </div>
       </section>
    </body>
    <script src="/js/app.js"></script>
</html>
