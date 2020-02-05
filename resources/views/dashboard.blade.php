

@if(count($listings) > 0)
@include('partials.active')

@else 
 @include('partials.welcome')
@endif
