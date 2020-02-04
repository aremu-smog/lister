<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lister</title>

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
       <header class="main-header bg-blue row row-center-xy">
            @yield('heading')
       </header>
       <section class="content-area bg-light-grey">
            @yield('content')
       </section>
        

        
        @include('partials.footer')
    </body>
</html>
