@extends('layouts.app')

@section('app.content')

    @include('partials.hero', [
        'hero_title' => 'Styling & Wrapping',
        'hero_image' => 'wrapping'
    ])

    <section class="Product">
        <div class="Product__picture">
            <img src="/images/products/wrapping_cars.jpg">
        </div>
    
        <p>Die Folierung Ihres Autos, das so genannte "Car Wrapping" bietet unzählige Gestaltungsmöglichkeiten - selbstverständlich auch als Teilfolierung. Das Beste dabei: Wünschen Sie sich ein neues Design oder steht Ihr Fahrzeug zum Verkauf, können Sie die <strong>Folie rückstandslos entfernen</strong>. Und der Lack darunter sieht aus wie vor der Beklebung. Oder setzen Sie Akzente mit <strong>hochwertigen Decals, Teilfolierungen (Dach, Spiegel, B-Säule)</strong>, Autoaufklebern oder Auto Tattoos in Form von Streifen und Tribals. Machen Sie Ihr Fahrzeug zum unverwechselbaren Blickfang!</p>
    
    </section>

    @include('partials.contact-maker')

    @include('partials.benefits', [
        'benefits_product' => [
            'Individualisierung über riesige Motivvielfalt',
            'Veredelung der Karosserie (z.B. matter Look)',
            'Lackschutz',
            'Kostengünster als Lackierung',
            'Werterhalt Ihres Fahrzeuges',
            'Jederzeit ablösbar'],
        'benefits_sicna' => [
            'Merkenmaterial',
            'Beratung aus 30 Jahren Materialerfahrung',
            'Haltbarkeit bis 8 Jahre (in Abhängigkeit von der Pflege)', 
            'Garantie bis 5 Jahre (in Verbindung mit unserer Nanoversiegelung)']
    ]) 
    
    @include('partials.picture-wall', ['images' => $ref_images])

@endsection