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

    <section id="ModalCreateUser" class="Modal">
        <header>Neuen Nutzer hinzufügen</header>
        <div class="Modal__body">
            <form class="Formular" action="" method="POST">
                {{ csrf_field() }}

                <div class="Formular__group">
                    <div class="Formular__group__part">
                        <label for="firstname">Vorname</label>
                        <input type="text" name="firstname" placeholder="Vorname">
                    </div>
                    <div class="Formular__group_part">
                        <label for="lastname">Nachname</label>
                        <input type="text" name="lastname" placeholder="Nachname">
                    </div>
                </div>

                <div class="Formular__group">
                    <label for="email">Mailadresse</label>
                    <input type="text" name="email" placeholder="mail@adresse.de">
                </div>
                
                <div class="Formular__category">
                    <header>Rechte</header>
                    <div class="Formular__group">
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="cb1" name="cb1">
                            <label for="cb1">Nutzer verwalten</label>
                        </div>
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="cb2" name="cb2">
                            <label for="cb2">Anfragen bearbeiten</label>
                        </div>
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="cb3" name="cb3">
                            <label for="cb3">DB-Preislisten bearbeiten</label>
                        </div>
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="cb4" name="cb4">
                            <label for="cb4">DB-Autos bearbeiten</label>
                        </div>
                    </div>
                    <div class="Formular__group">
                        <input type="submit" class="Button" value="Neu anlegen">
                    </div>
                </div>

            </form>
        </div>
    </section>
    
@stop