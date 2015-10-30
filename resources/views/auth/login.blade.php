@extends('layouts.app')

@section('app.content')
    
    @include('partials.navigation')

    <div class="Loginpage">
        <section class="Loginformular">
            
            <header><img src="/images/sicna-logo_login.png"></header>
            
            <form class="Formular" action="{{ route('auth.postLogin') }}" method="POST">
                {{ csrf_field() }}
                
                <div class="Formular__group -full">
                    <label for="email">Mailadresse</label>
                    <input type="text" name="email" placeholder="deine@adresse.de">
                </div>                                 

                <div class="Formular__group -full">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Streng geheim.">
                </div>

                <div class="Formular__group">
                    <input type="submit" class="Button" value="Anmelden">
                </div>  

            </form>

        </section>
    </div>
@stop