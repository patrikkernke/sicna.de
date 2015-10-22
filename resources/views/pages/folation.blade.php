@extends('layouts.product')

@section('hero.title', 'Werbebeschriftung')
@section('hero.image-path', '/images/hero/folation.jpg')

@section('product.description')
    
    <div class="Product__picture">
        <img src="/images/products/folation_cars.jpg">
    </div>
    
    <p>Fahrzeugwerbung kann einen wesentlichen Beitrag zum Aufbau von Marken und zur Erhöhung der Kaufbereitschaft leisten - vom Pkw über Lkw, Bus und Straßenbahn bis hin zu Sportboot oder Kreuzfahrschiff. Immer mehr Unternehmen nutzen diese für sie <strong>kostengünstige Werbemöglichkeit</strong>. Erstklassige Folienlösungen sind dabei entscheidend, um den Werbeauftritt auch perfekt umzusetzen. Die Beschriftung finden unter anderem Anwendung bei der <strong>Flottenbeschriftung, Busse & Strassenbahnen, Taxis, Züge und Boote</strong>.</p>
    
@stop

@section('product.benefits.client')
    <li>Werbung / Präsenz</li>
    <li>Ergänzung bestehender Werbemittel</li>
    <li>Ganzheitlicher Markenauftritt</li>
    <li>Einheitlicher, erkennbarer Fuhrpark</li>
@stop

@section('product.benefits.sicna')
    <li>10 Jahre Garantie</li>
    <li>Markenmaterial</li>
    <li>Beratung aus 30 Jahren Materialerfahrung</li>
    <li>Digitaldruck (inkl. Colormanagement)</li>
    <li>Perfekte Designanpassungen anhand digitaler Fahrzeugkonturen</li>
    <li>Vielfalt an Pantone / RAL-Farbfolien</li>
@stop

@section('product.pictures')
    
    @each('partials.gallery-item', $ref_images, 'image');

@stop