<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>SICNA.de - Attraktive Folienlösungen (Beschriftung, Lackschutz, Sonnenschutz & Wrapping)</title>

    <link rel="stylesheet" href="/css/app.css">

</head>
<body>

    @include('partials.navigation')

    @include('partials.slider')

    @include('partials.clients')

    <section class="Teaser Teaser-folation">
        <div class="Filmhero"></div>
        <div class="Teaser-folation__body">
            <h2>Styling oder Werbung?</h2>
            <p>Dann sind wir der richtige Partner. Egal ob Entwicklung und Umsetzung Ihrer Corporate Identity, Realisierung und Wartung von Fahrzeugflotten, Werbebeschriftungen, Car-Wrappings oder Verschönerung des Fahrzeuglooks: in allen Bereichen besitzen wir über 30 Jahre Erfahrungen und können Sie optimal beraten.</p>
            <a href="#" class="Button">Mehr Informationen</a>
        </div>
    </section>

    <section class="Teaser Teaser-sunprotection -overhead">
        <div class="Teaser-sunprotection__splitter">
           <a href="#">
               <img src="/images/teaser/sun-protection_building.jpg">
               <span class="Button">Gebäude</span>
           </a> 
           <a href="#">
               <img src="/images/teaser/sun-protection_car.jpg">
               <span class="Button">Fahrzeuge</span>
           </a> 
        </div>
        <div class="Teaser-sunprotection__body">
            <h2>Sonnenschutz?</h2>
            <h3>Looks Hot, Feels cold.</h3>
        </div>
    </section>

    
</body>
</html>
