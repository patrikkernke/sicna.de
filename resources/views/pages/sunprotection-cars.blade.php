@extends('layouts.product')

@section('hero.title', 'Sonnenschutz Fahrzeuge')
@section('hero.image-path', '/images/hero/sun-protection_car.jpg')

@section('product.description')
    
    <div class="Product__picture">
        <img src="/images/products/sun-protection_cars.jpg">
    </div>
    
    <p>SICNA Sonnenschutzfolien bieten weit mehr als einen "coolen Look": Sie halten den Fahrzeuginnenraum spürbar kühler und steigern den Fahrkomfort für kleine und große Passagiere. So bieten sie exzellenten <strong>Sonnenschutz für Mensch und Tier</strong>. Und je nach Tönungsgrad schützen sie vor neugierigen Blicken und werden dank ihrer Splitterschutzwirkung zum echten Einbruchshemmer.</p>

@stop

@section('product.benefits.client')
    <li>Jederzeit ablösbar</li>
    <li>Sichtschutz für Wertsachen & Ladung</li>
    <li>Schutz vor UV-Strahlung</li>
    <li>Verminderte Aufheizung durch Sonne</li>
@stop

@section('product.benefits.sicna')
    <li>UV-beständiges Markematerial</li>
    <li>Beratung aus 30 Jahren Materialerfahrung</li>
    <li>10 Jahre Garantie</li>
@stop

@section('product.contact-maker.title', 'Unverbindliches Angebot?')
@section('product.contact-maker.button.text', 'Fragen Sie uns')

@section('product.pictures')
    @for($i = 1; $i <= 10; $i++)
    <li>
        <a href="#">
            <img src="/images/products/sun-protection_cars/thumb-{{ $i }}.jpg">
        </a>
    </li>
    @endfor
@stop