<section class="Benefits">
    <div class="Benefits__background">
        <div class="Benefits__background__left"></div>
        <div class="Benefits__background__right"></div>
    </div>
    <div class="Benefits__content">
        <div>
            <h4>Was haben Sie davon?</h4>
            <ul>
                @if ( isset($benefits_product) and (count($benefits_product) > 0) )
                    @foreach ($benefits_product as $benefit)
                        <li>{{ $benefit }}</li>
                    @endforeach
                @else                
                    <li>Produktvorteile</li>
                @endif
            </ul>
        </div>
        <div>
            <h4>Warum SICNA?</h4>
            <ul>
               @if ( isset($benefits_sicna) and (count($benefits_sicna) > 0) )
                   @foreach ($benefits_sicna as $benefit)
                       <li>{{ $benefit }}</li>
                   @endforeach
               @else                
                   <li>Stärken von SICNA</li>
               @endif
            </ul>
        </div>
    </div>
</section>