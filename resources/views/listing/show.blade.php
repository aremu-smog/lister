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
       <header class="list-view bg-blue ">
            <div class="container row row-mobile-wrap">
                <div class="col-4 row row-center-x col-mobile-full">
                    <img src="/img/products/{{$listing->image}}" alt="{{$listing->name}}">
                </div>
                <div class="col-6 col-mobile-full">
                    <h1 class="text-white text-lg text-bold heading-mobile">{{$listing->name}}</h1>
                    <div>
                        <a href="http://{{$listing->website}}" target="_blank" class="btn btn-green btn-mobile-lg">Visit website</a>
                        <a href="mailto:{{$listing->email}}" target="_blank" class="btn btn-green-outline btn-mobile-lg">Send a mail</a>
                    </div>
                    
                    <p class="text-regular text-white">{{$listing->bio}}</p>
                    <hr>
                    <div class="text-light text-white additional-info row-mobile-wrap">
                        <div class="mobile-full"><img src="/img/main/location.svg" alt="Location Icon" class="icon"> {{$listing->address}}</div>
                        <div class="mobile-full"><img src="/img/main/phone.svg" alt="Phone Icon" class="icon"> {{$listing->phone}}</div>
                        
                    </div>
                </div>
            </div>
       </header>
       <section class="content-area bg-light-grey">
            <div class="recent-listings">
                    <section class="container">
                        <header class="text-center">
                            <h1 class="text-blue text-bold heading-mobile">Other Listings</h1>
                        </header>
        
                        @include('partials.listings')
                    </section>
                </div>
       </section>
        

        
        @include('partials.footer')
    </body>
    <script src="/js/app.js"></script>
</html>



        

