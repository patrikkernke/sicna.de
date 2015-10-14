@extends('layouts.app')

@section('app.content')
    
    @include('layouts.partials.hero')
    @include('layouts.partials.products.product-default')
    @include('layouts.partials.products.contact-maker')
    @include('layouts.partials.products.benefits')
    @include('layouts.partials.products.picture-wall')

@stop