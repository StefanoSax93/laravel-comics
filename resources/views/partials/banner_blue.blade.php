<div class="bg-banner-blue pt-5 pb-4">
    <div class="container px-5">
        <div class="row align-items-center">
            @foreach ($list as $item)
                <div class="col-6 col-lg-3 col-xl mb-3">
                    <img src="{{asset('images/' . $item['img'])}}" alt="{{$item['text']}}">
                    <a class="text-white text-uppercase ms-2 text-decoration-none" href="#">{{$item['text']}}</a>
                </div>
            @endforeach
            <div class="col-6 col-lg-3 col-xl mb-3">
                <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 79.5 50.9" xml:space="preserve"><path class="st0" d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2"/><path fill="#fff" stroke="#fff" stroke-width=".998" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z"/></svg>
                <a class="text-white text-uppercase ms-2 text-decoration-none" href="#">dc power visa</a>
            </div>
        </div>
    </div>
</div>