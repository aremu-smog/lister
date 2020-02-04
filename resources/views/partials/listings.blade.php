
<section class="row row-spread-items">
    @foreach ($listings as $listing)

    <article class="col-3 item">
            <header>
            <img src="/img/products/{{$listing->image}}" alt="{{$listing->name}}">
            </header>
            <footer class="container">
                <h3 class="text-bold text-green">{{$listing->name}}</h3>
                <p class="text-blue">{{$listing->bio}} </p>
                @guest
                <a href="#" class="btn btn-green">View details</a>  
                @endguest
                @auth
                <a href="#" class="btn btn-green">Edit details</a>
                <a href="#" class="btn btn-red">Delete item</a>
                @endauth
                
            </footer>
        </article>
    
    @endforeach
    
</section>