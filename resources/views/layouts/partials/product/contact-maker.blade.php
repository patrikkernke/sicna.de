<section class="ContactMaker">
    <h3>
        @yield('product.contact-maker.title','Nehmen Sie Kontakt mit uns auf!')
    </h3>
    <a href="@yield('product.contact-maker.button.target', route('contact.app'))" class="Button">
        @yield('contact-maker.button.text', 'Beratungstermin vereinbaren')
    </a>
</section>