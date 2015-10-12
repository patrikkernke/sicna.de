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
    
    @include('partials.teaser-folation')
    @include('partials.teaser-sun-protection')

    <footer class="Footer">
        <ul class="Footer__menue">
            <li><a href="#">Kontakt aufnehmen</a></li>
            <li><a href="#">Anfahrt</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>
        <ul class="Footer__menue -right">
            <li><a href="/">
                <img src="/images/sicna-logo_footer.png">
            </a></li>
        </ul>
    </footer>

    
</body>
</html>
