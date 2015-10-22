@extends('layouts.product')

@section('hero.title', 'Styling & Wrapping')
@section('hero.image-path', '/images/hero/sun-protection_car.jpg')

@section('product.description')

    <div class="Product__picture">
        <img src="/images/products/wrapping_cars.jpg">
    </div>
    
    <p>Die Folierung Ihres Autos, das so genannte "Car Wrapping" bietet unzählige Gestaltungsmöglichkeiten - selbstverständlich auch als Teilfolierung. Das Beste dabei: Wünschen Sie sich ein neues Design oder steht Ihr Fahrzeug zum Verkauf, können Sie die <strong>Folie rückstandslos entfernen</strong>. Und der Lack darunter sieht aus wie vor der Beklebung. Oder setzen Sie Akzente mit <strong>hochwertigen Decals, Teilfolierungen (Dach, Spiegel, B-Säule)</strong>, Autoaufklebern oder Auto Tattoos in Form von Streifen und Tribals. Machen Sie Ihr Fahrzeug zum unverwechselbaren Blickfang!</p>

@stop

@section('product.benefits.client')
    <li>Individualisierung über riesige Motivvielfalt</li>
    <li>Veredelung der Karosserie (z.B. matter Look)</li>
    <li>Lackschutz</li>
    <li>Kostengünstiger als Lackierung</li>
    <li>Werterhalt Ihres Fahrzeuges</li>
    <li>Jederzeit ablösbar</li>
@stop

@section('product.benefits.sicna')
    <li>Markematerial</li>
    <li>Beratung aus 30 Jahren Materialerfahrung</li>
    <li>Haltbarkeit bis 8 Jahre (in Abhängigkeit von der Pflege)</li>
    <li>Garantie bis 5 Jahre (in Verbindung mit unserer Nanoversiegelung)</li>
@stop

@section('product.pictures')
    @each('partials.gallery-item', $ref_images, 'image');
@stop