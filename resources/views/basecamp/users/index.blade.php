@extends('layouts.backend')

@section('backend.content')
    <header>Nutzerverwaltung</header>
    <a href="#" class="BackendContent__addbutton"><i class="fa fa-plus"></i></a>
    
    <div class="BackendContent__wrapper">
        <div class="Table Table--4">
            <header class="Table__header">
                <div>Name</div>
                <div><i class="fa fa-envelope-o"></i></div>
                <div><i class="fa fa-shield"></i></div>
            </header>
            <div class="Table__content">
                @foreach($users as $user)
                <div class="Table__row">
                    <div><strong>{{ $user->lastname }},</strong> {{ $user->firstname}}</div>
                    <div>{{ $user->email }}</div>
                    <div class="Table__rights">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-database has-right"></i>
                        <i class="fa fa-sun-o"></i>
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="Table__menue">
                        <a href="">Bearbeiten</a>
                        <a href="">Löschen</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
@stop