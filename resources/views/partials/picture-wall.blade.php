<section class="PictureWall">
    <h3>Produktbilder</h3>
    <ul class="PictureWall__thumbs">
       
       @if (isset($images) and (count($images) > 0))
         @foreach ($images as $image)
             <li>
                 <a href="/images/products/{{$image['original']}}" data-lightbox="ref-gallery">
                     <img src="/images/products/{{$image['thumb']}}">
                 </a>
             </li>
         @endforeach
       @else
        <h3>Keine Bilder vorhanden.</h3>
       @endif

    </ul>
</section>