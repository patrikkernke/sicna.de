<nav class="Navbar">
    
    <div class="Navbar__brand">
        <a href="{{ route('welcome') }}"><img src="/images/sicna-logo_nav.png" alt="SICNA.de Logo"></a>
    </div>
    
    <ul class="Navbar__menue">
        <li>
            <a href="#">Dienstleistungen</a>
            <ul class="Navbar__menue__submenue">
                <li><a href="{{ route('product.folation') }}">Car-Design</a></li>
                <li><a href="{{ route('product.folation') }}">Car-Wrapping</a></li>
                <li><a href="#">Fahrzeugbeschriftung</a></li>
                <li><a href="#">Lackschutz Fahrrad</a></li>
                <li><a href="#">Lackschutz KFZ</a></li>
                <li><a href="#">Sonnenschutz Gebäude</a></li>
                <li><a href="{{ route('sunprotection.cars') }}">Sonnenschutz KFZ</a></li>
                <li><a href="{{ route('product.folation') }}">Werbebeschriftung</a></li>
            </ul>
        </li> 
        <li><a href="#">Über uns</a></li> 
        <li>
            <a href="#">Kontakt</a>
            <ul class="Navbar__menue__submenue">
                <li><a href="#">Anfrage</a></li>
                <li><a href="#">Mail</a></li>
                <li><a href="#">Telefon</a></li>
            </ul>
        </li> 
    </ul>

    <ul class="Navbar__menue -right">
        <li>
            <a href="#">Formulare</i></a>
            <ul class="Navbar__menue__submenue">
                <li><a href="#">ATU</a></li>
                <li><a href="#">Feuerwehrtechnik Schmitt</a></li>
                <li><a href="#">Jungbluth</a></li>
                <li><a href="">Kernhaus</a></li>
                <li><a href="">Polizeiwerkstatt Koblenz</a></li>
            </ul>
        </li>
    </ul>

</nav>