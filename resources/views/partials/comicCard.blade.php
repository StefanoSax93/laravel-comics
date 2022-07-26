<div class="col-xl-2 col-lg-3 col-md-4 col-6">
    <div class="position-relative">
        <img src="{{ $comic['thumb'] }}" :alt="'immagine di'.$comic['title']" class="thumb d-block">
        <div class="slide-overlay p-3">
            <h6><strong>Prezzo:</strong> {{ $comic['price'] }}</h6>
            <h6><strong>Tipo:</strong> {{ $comic['type'] }}</h6>
        </div>
    </div>
    <h6 class="text-uppercase">{{ $comic['series'] }}</h6>
</div>
