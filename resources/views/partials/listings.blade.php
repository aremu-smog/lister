
<section class="listings">
    @foreach ($listings as $listing)

    <article class="">
        <section class="item">
                <header>
                        <img src="/img/products/{{$listing->image}}" alt="{{$listing->name}}">
                        </header>
                        <footer class="container">
                                <a href="/listing/{{$listing->id}}"><h3 class="text-bold text-green">{{$listing->name}}</h3></a>
                            <p class="text-blue">{{ substr($listing->bio,0,80).'...'}} </p>
                            @guest
                            <a href="/listing/{{$listing->id}}" class="btn btn-green btn-hide-on-mobile">View details</a>  
                            @endguest
                            @auth
                            <div class="row">
                                <a href="/listing/{{$listing->id}}/edit" class="btn btn-green">Edit details </a> &nbsp;
            
                                <form  action="{{ route('listing.destroy',$listing->id) }}"  method="POST" >
            
                                       
                                        <button type="submit" onclick="confirm('Are you sure you want to delete?')" class="btn btn-red">Delete</button>
                                        @csrf
                                        {{method_field('DELETE')}}
                                </form>
                            </div>
                            
                            {{-- <a href="#" class="btn btn-red">Delete item</a> --}}
                            @endauth
                            
                        </footer>
        </section>

        </article>
    
    @endforeach
    
</section>