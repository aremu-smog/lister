<nav class=" main-navigation">
    <div class="container-fluid row row-center-y row-spread-items">
        <div><a 
            href="@guest / @endguest 
            @auth /dashboard @endauth">
            
            <img src="/img/main/logo.svg" alt="Lister logo"></a></div>
        <div class="row row-center-y">
            @guest
            <a href="/login" class="btn btn-green">Login</a>
            <a href="/register" class="btn btn-green-outline">Register</a>
            @endguest
            @auth
                <a href="/dashboard" class="text-white">Dashboard</a>
                <a href="/listing/create" class="text-white">Add Product</a>
                {{-- <a href="#"><img src="/img/main/user.svg" alt="User Icon"></a> --}}
                <a href="{{ route('logout') }}" class="btn btn-green-outline"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>
    </div>
</nav>