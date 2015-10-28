@extends('layouts.app')

@section('app.content')

    @include('partials.hero', [
        'hero_title' => 'Kontakt',
        'hero_image' => 'contact',
    ])

    <section class="Product">
        <p>Wir möchten Ihnen eine fachkompetente und umfassende Beratung zukommen lassen. Dazu bräuchten wir einige Details zur Anfrage. <strong>Bitte füllen Sie das untenstehende Formular aus.</strong> Ein Mitarbeiter meldet sich zeitnah bei Ihnen. Gerne können Sie uns auch in besonderen Fällen telefonisch unter</p>
        <p class="important">+49 (0) 2630 - 84088</p>
        <p>oder via E-Mail unter</p>
        <p class="important">info@sicna.de</p>
        <p>erreichen. </p>
    </section>

    <section class="Foreground">

        <form class="Formular">

            <div class="Formular__category">
                
                <header>Kontaktinformationen</header>
                
                <div class="Formular__group">
                    <label>Ansprechpartner</label>
                    <select>
                        <option>Herr</option>
                        <option>Frau</option>
                    </select>
                    <input type="text" placeholder="Vorname">
                    <input type="text" placeholder="Nachname">
                </div>

                <div class="Formular__group">
                    <div class="Formular__group__part">
                        <label for="">Mailadresse</label>
                        <input type="text" placeholder="ihre@adresse.de">
                    </div>
                    <div class="Formular__group__part">
                        <label for="">Telefon</label>
                        <input type="text" placeholder="Vorwahl / Rufnummer">
                    </div>
                </div>

            </div>   

            <div class="Formular__category">
                <header>Ihre Nachricht an uns</header>
                <input type="textarea" placeholder="Welche Fragen haben Sie?">
            </div>         

        </form>

    </section>

@stop