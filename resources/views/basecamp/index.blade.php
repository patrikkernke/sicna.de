@extends('layouts.backend')

@section('backend.content')
    <header>Nutzerverwaltung</header>
    <a href="#" class="BackendContent__addbutton"><i class="fa fa-plus"></i></a>
    
    <div class="BackendContent__wrapper">
        <table class="Table">
            <thead>
                <tr>
                    <td>Vorname</td>
                    <td>Nachname</td>
                    <td><i class="fa fa-envelope-o"></i></td>
                    <td><i class="fa fa-shield"></i></td>
                    <td><i class="fa fa-gear"></i></td>
                </tr>
            </thead>
            <tbody>
                @foreach(App\User::all() as $user)
                <tr>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>Rechte</td>
                    <td>Menü</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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