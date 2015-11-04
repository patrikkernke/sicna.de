@extends('layouts.backend')

@section('backend.vue.id', 'UserManagerView')

@section('backend.content')
    <header>Nutzerverwaltung</header>
    <a href="#" class="BackendContent__addbutton" v-on:click.prevent="showModalCreateUser()"><i class="fa fa-plus"></i></a>
    
    <div class="BackendContent__wrapper">
        <div class="Table Table--3">
            <header class="Table__header">
                <div>Name</div>
                <div>Mailadressen</i></div>
            </header>
            <div class="Table__content">
                <div class="Table__row" v-for="user in users | orderBy 'lastname'">
                    <div><strong>@{{ user.lastname }},</strong> @{{ user.firstname}}</div>
                    <div>@{{ user.email }}</div>
                    <div class="Table__menue">
                        <a href="#" v-on:click.prevent="showModalNewPassword(user)">Neues Passwort</a>
                        <a href="#">Bearbeiten</a>
                        <a href="#" v-on:click.prevent="deleteUser(user, $index)">Löschen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="Modal" v-show="modalCreateUser.show" transition="modal">
        <div class="Modal__desk"></div>
        <header>Neuen Nutzer hinzufügen</header>
        <div class="Modal__body">
            <form class="Formular" action="" method="POST">
                
                <div class="Formular__group">
                    <div class="Formular__group__part">
                        <label for="firstname">Vorname</label>
                        <input type="text" name="firstname" placeholder="Vorname" v-model="newUser.firstname">
                    </div>
                    <div class="Formular__group_part">
                        <label for="lastname">Nachname</label>
                        <input type="text" name="lastname" placeholder="Nachname" v-model="newUser.lastname">
                    </div>
                </div>

                <div class="Formular__group">
                    <label for="email">Mailadresse</label>
                    <input type="text" name="email" placeholder="mail@adresse.de" v-model="newUser.email">
                </div>
                
    
                <div class="Formular__group">
                    <input type="submit" class="Button" value="Neu anlegen" v-on:click.prevent="createUser()">
                    <a href="#" class="Button Button--default" v-on:click.prevent="hideModalCreateUser()">Abbrechen</a>
                </div>

            </form>
        </div>
    </section>

    <section class="Modal" v-show="modalNewPassword.show" transition="modal">
        <div class="Modal__desk"></div>
        <header>Neues Passwort vergeben</header>
        <div class="Modal__body">
            <form class="Formular" action="" method="POST">
                
                <div class="Formular__group">
                    <input type="text" name="password" placeholder="Streng geheim." v-model="newPassword">
                </div>
    
                <div class="Formular__group">
                    <input type="submit" class="Button" value="Speichern" v-on:click.prevent="createNewPassword(selectedUser)">
                    <a href="#" class="Button Button--default" v-on:click.prevent="hideModalNewPassword()">Abbrechen</a>
                </div>

            </form>
        </div>
    </section>
@stop