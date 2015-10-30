@extends('layouts.site')

@section('site.content')
    
    @include('partials.hero-map', ['hero_title' => 'Über uns'])
    
    <section class="Product">
        <p><stroing>SICNA.de</stroing> ist ein Familienbetrieb der auf <strong>30 Jahre Materialerfahrung</strong> zurückblicken kann. Wir legen viel Wert auf eine umfassende <strong>fachkompetente Beratung</strong>. Jeder Auftrag muss hinsichtlich Anwendungszweck, Material, Haltbarkeit und Preis neu analysiert werden. Wir sehen uns als Partner unserer Kunden und suchen für Sie langfristige Lösungen. Dafür nutzen wir bewährte Produkte unserer Lieferanten und scheuen uns nicht davor in Zusammenarbeit <strong>individuelle und einzigartige Lösungen</strong> zu finden.</p>

        <img src="/images/sicna-logo_nav.png">

        <h5>SICNA.de (Inh. Gerhard Reichert)</h5>
        <h6>Mailadresse</h6>
        <p>info@sicna.de</p>
        <h6>Telefon</h6>
        <p>+49 (0) 2630 - 84088</p>
        <h6>Adresse</h6>
        <p>Rudolf-Diesel-Straße 8 <br> 
        56220 Urmitz bei Koblenz</p>
    </section>

    <section class="Partners">
        <img src="/images/partners/logo-hexis.png">
        <img src="/images/partners/logo-avery.png">
        <img src="/images/partners/logo-3m.png">
        <img src="/images/partners/logo-orafol.png">
    </section>

@endsection