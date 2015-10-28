<section class="ContactMaker">
    <h3>{{ $contact_maker_call or 'Nehmen Sie Kontakt mit uns auf!' }}</h3>
    <a href="{{ $contact_maker_target or route('page.contact') }}" class="Button">
        {{ $contact_maker_button or 'Beratungstermin vereinbaren' }}
    </a>
</section>