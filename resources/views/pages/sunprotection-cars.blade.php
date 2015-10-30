@extends('layouts.site')

@section('site.content')
    
    @include('partials.hero', [
        'hero_title' => 'Sonnenschutz Fahrzeuge',
        'hero_image' => 'sun-protection_cars'
    ])

    <section class="Product">
        <div class="Product__image">
            <img src="/images/products/sun-protection_cars.jpg">
        </div>

        <p>SICNA Sonnenschutzfolien bieten weit mehr als einen "coolen Look": Sie halten den Fahrzeuginnenraum spürbar kühler und steigern den Fahrkomfort für kleine und große Passagiere. So bieten sie exzellenten <strong>Sonnenschutz für Mensch und Tier</strong>. Und je nach Tönungsgrad schützen sie vor neugierigen Blicken und werden dank ihrer Splitterschutzwirkung zum echten Einbruchshemmer.</p>
    </section>

    @include('partials.contact-maker', [
        'contact_maker_call'   => 'Unverbindliches Angebot?',
        'contact_maker_button' => 'Fragen Sie uns'
    ])

    @include('partials.benefits', [
        'benefits_product' => [
            'Jederzeit ablösbar',
            'Sichtschutz für Wertsachen und Ladung',
            'Schutz vor UV-Strahlung',
            'Verminderte Aufheizung durch Sonne'
        ],
        'benefits_sicna' => [
            'UV-beständiges Markenmaterial',
            'Beratung aus 30 Jahren Materialerfahrung',
            '10 Jahre Garantie'
        ]
    ])

    @include('partials.picture-wall', ['images' => $ref_images])

@endsection