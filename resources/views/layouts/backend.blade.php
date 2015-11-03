@extends('layouts.app')

@section('app.content')
    
    <section class="Sidebar">
        <header>
            <img src="/images/sicna-logo_backend.png">
        </header>

        <section class="Sidebar__user">
            <header>{{ Auth::user()->initials() }}</header>
        </section>

        <nav class="Backendnav">
            <ul>
                <li><a href="{{ route('basecamp.users.index') }}"><i class="fa fa-user"></i></a></li>
                <li><a href="#"><i class="fa fa-car"></i></a></li>
                <li><a href="#"><i class="fa fa-gear"></i></a></li>
            </ul>
            <ul>
                <li><a href="{{ route('auth.logout') }}">Logout</a></li>
            </ul>
        </nav>
    </section>
    
    <section class="BackendContent">
        @yield('backend.content')
    </section>
@stop