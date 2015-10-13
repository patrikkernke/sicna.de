@extends('layouts.product-default')

@section('hero.title', 'Styling & Werbung')
@section('hero.image-path', '/images/hero/sun-protection_car.jpg')

@section('product.content')
    
    <div class="Product__picture">
        <img src="/images/products/sun-protection_cars.jpg">
    </div>

    <h4>Werbebeschriftung</h4>
    
    <p>Fahrzeugwerbung kann einen wesentlichen Beitrag zum Aufbau von Marken und zur Erhöhung der Kaufbereitschaft leisten - vom Pkw über Lkw, Bus und Straßenbahn bis hin zu Sportboot oder Kreuzfahrschiff. Immer mehr Unternehmen nutzen diese für sie <strong>kostengünstige Werbemöglichkeit</strong>. Erstklassige Folienlösungen sind dabei entscheidend, um den Werbeauftritt auch perfekt umzusetzen. Die Beschriftung finden unter anderem Anwendung bei der <strong>Flottenbeschriftung, Busse & Strassenbahnen, Taxis, Züge und Boote</strong>.</p>
    
    <div class="Product__picture">
        <img src="/images/products/sun-protection_cars.jpg">
    </div>

    <h4>Car-Wrapping & -Styling</h4>
    
    <p>Die Folierung Ihres Autos, das so genannte "Car Wrapping" bietet unzählige Gestaltungsmöglichkeiten - selbstverständlich auch als Teilfolierung. Das Beste dabei: Wünschen Sie sich ein neues Design oder steht Ihr Fahrzeug zum Verkauf, können Sie die <strong>Folie rückstandslos entfernen</strong>. Und der Lack darunter sieht aus wie vor der Beklebung. Oder setzen Sie Akzente mit <strong>hochwertigen Decals, Teilfolierungen (Dach, Spiegel, B-Säule)</strong>, Autoaufklebern oder Auto Tattoos in Form von Streifen und Tribals. Machen Sie Ihr Fahrzeug zum unverwechselbaren Blickfang!</strong>.</p>

@stop

@section('benefits.client')
    <li>Individualisierung über riesige Motivvielfalt</li>
    <li>Veredelung der Karosserie (z.B. matter Look)</li>
    <li>Kostengünstiger als Lackierung</li>
    <li>Werterhalt Ihres Fahrzeuges</li>
    <li>Jederzeit ablösbar</li>
@stop

@section('benefits.sicna')
    <li>Markematerial</li>
    <li>Haltbarkeit bis 8 Jahre (in Abhängigkeit von der Pflege)</li>
    <li>Garantie bis 5 Jahre (in Verbindung mit unserer Nanoversiegelung)</li>
@stop

@section('picturewall.thumbs')
    @for($i = 1; $i <= 10; $i++)
    <li>
        <a href="#">
            <img src="/images/products/sun-protection_cars/thumb-{{ $i }}.jpg">
        </a>
    </li>
    @endfor
@stop