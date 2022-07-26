<div class="slide-style position-relative">
    <img src="{{asset('images/jumbotron.jpg')}}" alt="">
    <div class="mini-banner text-uppercase px-3 py-1">Current Series</div>
</div>

<div class="bg_secondary pt-5 pb-3 text-white">
    <div class="container px-2">
        <div class="row justify-content-center">
            @foreach ($comics as $comic)
                @include('partials.comicCard', [
                    "comic" => $comic
                ])
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="text-uppercase my-btn fs-5 fw-bold px-5 py-2 text-decoration-none" href="">Load more</a>
        </div>
    </div>
</div> 