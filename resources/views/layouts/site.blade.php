@extends('layouts.app')

@section('app.content')
    
    @include('partials.navigation')

    @yield('site.content')

    @include('partials.footer')

    <script src="/js/vendor.js"></script>

@stop