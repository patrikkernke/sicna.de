@extends('layouts.backend')

@section('backend.content')
    <header>Nutzerverwaltung</header>
    <a href="#" class="BackendContent__addbutton"><i class="fa fa-plus"></i></a>
    
    <div class="BackendContent__wrapper">
        <div class="Table">
            <header class="Table__header">
                <div>Vorname</div>
                <div>Nachname</div>
                <div><i class="fa fa-envelope-o"></i></div>
                <div><i class="fa fa-shield"></i></div>
                <div><i class="fa fa-gear"></i></div>
            </header>
            <div class="Table__content">
                @foreach(App\User::all() as $user)
                <div class="Table__content">
                    <div>{{ $user->firstname }}</div>
                    <div>{{ $user->lastname }}</div>
                    <div>{{ $user->email }}</div>
                    <div>Rechte</div>
                    <div>Menü</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    

   {{--  <div class="BackendContent__wrapper">
        <ul class="Cardsgallery">
            <li><a href="#">Audi</a></li>
            <li><a href="#">BMW</a></li>
            <li><a href="#">Fiat</a></li>
            <li><a href="#">Ford</a></li>
            <li><a href="#">Jaguar</a></li>
            <li><a href="#">Mercedes</a></li>
            <li><a href="#">Opel</a></li>
            <li><a href="#">Volkswagen</a></li>
        </ul>
    </div> --}}
@stop