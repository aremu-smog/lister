@extends('layouts.app')
    @section('heading')
        <h1 class="text-center text-white text-bold text-lg">
            Welcome back, <span class="text-green">{{Auth::user()->name}}</span>
        </h1>
    @endsection
    @section('content')
    <div class="recent-listings">
            <div class="container">
                    <div class="dashboard-listing">
                        @include('partials.listings')
                    </div>
                </div>
    </div>

    @endsection