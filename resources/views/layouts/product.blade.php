@extends('layouts.app')

@section('app.content')
    
    @include('layouts.partials.hero')
    @include('layouts.partials.product.description')
    @include('layouts.partials.product.contact-maker')
    @include('layouts.partials.product.benefits')
    @include('layouts.partials.product.picture-wall')

@stop