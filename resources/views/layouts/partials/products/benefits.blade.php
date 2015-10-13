<section class="Benefits">
    <div class="Benefits__background">
        <div class="Benefits__background__left"></div>
        <div class="Benefits__background__right"></div>
    </div>
    <div class="Benefits__content">
        <div>
            <h4>Was haben Sie davon?</h4>
            <ul>
                @yield('benefits.client', '<li>Kundenvorteile</li>')
            </ul>
        </div>
        <div>
            <h4>Warum SICNA?</h4>
            <ul>
                @yield('benefits.sicna', '<li>SICNA-Vorteile</li>')
            </ul>
        </div>
    </div>
</section>