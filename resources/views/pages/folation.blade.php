@extends('layouts.app')

@section('app.content')
    
    @include('partials.hero', [
        'hero_title' => 'Werbebeschriftung',
        'hero_image' => 'folation'
    ])

    <section class="Product">
        
        <div class="Product__picture">
            <img src="/images/products/folation_cars.jpg">
        </div>

        <p>Fahrzeugwerbung kann einen wesentlichen Beitrag zum Aufbau von Marken und zur Erhöhung der Kaufbereitschaft leisten - vom Pkw über Lkw, Bus und Straßenbahn bis hin zu Sportboot oder Kreuzfahrschiff. Immer mehr Unternehmen nutzen diese für sie <strong>kostengünstige Werbemöglichkeit</strong>. Erstklassige Folienlösungen sind dabei entscheidend, um den Werbeauftritt auch perfekt umzusetzen. Die Beschriftung finden unter anderem Anwendung bei der <strong>Flottenbeschriftung, Busse & Strassenbahnen, Taxis, Züge und Boote</strong>.</p>

    </section>

    @include('partials.contact-maker')
    
    @include('partials.benefits', [
        'benefits_product' => [
            'Werbung / Präsens',
            'Ergänzung bestehender Werbemittel',
            'Ganzheitlicher Markenauftritt',
            'Einheitlicher und erkennbarer Fuhrpark'],
        'benefits_sicna' => [
            '10 Jahre Garantie',
            'Markenmaterial',
            'Beratung aus 30 Jahren Materialerfahrung',
            'Digitaldruck (inkl. Colormanagement)',
            'Perfekte Designanpassungen anhand digitaler Fahrzeugkonturen',
            'Vielfalt an Pantone/ RAL-Farbfolien'],
    ])

    @include('partials.picture-wall', ['images' => $ref_images])
    
@endsection