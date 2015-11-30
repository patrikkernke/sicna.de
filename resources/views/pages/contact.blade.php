@extends('layouts.site')

@section('site.content')

    @include('partials.hero', [
        'hero_title' => 'Kontakt',
        'hero_image' => 'contact',
    ])

    <section class="Product">
        <p><strong>Gerne beraten wir Sie!</strong></p>
        <p>Dazu haben wir einige Detail-Fragen. Unsere Fragen und Platz für Ihre Antworten finden Sie im untenstehenden Formular. Ein Mitarbeiter meldet sich zeitnah. Sie erreichen uns telefonisch unter</p>
        <p class="important">+49 (0) 2630 - 84088</p>
    </section>

    <section class="Foreground">
        <div class="Foreground__center">
            <form class="Formular">

                <div class="Formular__category">
                    
                    <header>Für welche Produkte interessieren Sie sich?</header>

                    <div class="Formular__group">
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="wrapping" name="wrapping"><label for="wrapping">Car-Styling und Wrapping</label>
                        </div>
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="sunprotecting-cars" name="sunprotecting-cars"><label for="sunprotecting-cars">Sonnenschutz für Fahrzeuge</label>
                        </div>
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="folation" name="folation"><label for="folation">Werbebeschriftung</label>
                        </div>
                        <div class="Formular__checkbox">
                            <input type="checkbox" id="other" name="other"><label for="other">Sonstiges</label>
                        </div>
                    </div>

                </div>

                <div class="Formular__category">
                    
                    <header>Kontaktinformationen</header>
                    
                    <div class="Formular__group">
                        <label>Ansprechpartner</label>
                        <div class="Formular__select">
                            <select>
                                <option>Herr</option>
                                <option>Frau</option>
                            </select>
                        </div>
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
                    <textarea placeholder="Welche Fragen haben Sie?"></textarea>
                </div> 

                <div class="Formular__group">
                    <input type="submit" class="Button" value="Absenden">
                </div>        

            </form>

        </div>

    </section>

@stop