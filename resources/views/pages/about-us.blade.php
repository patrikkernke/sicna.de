@extends('layouts.app')

@section('app.content')
    @include('layouts.partials.hero')
    @include('layouts.partials.product.description')
@stop

@section('hero.title', 'Über uns')
@section('hero.image-path', '/images/hero/sun-protection_car.jpg')

@section('product.description')
    
    <p><stroing>SICNA.de</stroing> ist ein Familienbetrieb der auf <strong>30 Jahre Materialerfahrung</strong> zurückblicken kann. Wir legen viel Wert auf eine umfassende <strong>fachkompetente Beratung</strong>. Jeder Auftrag muss hinsichtlich Anwendungszweck, Material, Haltbarkeit und Preis neu analysiert werden. Wir sehen uns als Partner unserer Kunden und suchen für Sie langfristige Lösungen. Dafür nutzen wir bewährte Produkte unserer Lieferanten und scheuen uns nicht davor in Zusammenarbeit <strong>individuelle und einzigartige Lösungen</strong> zu finden. 
</p>

@stop