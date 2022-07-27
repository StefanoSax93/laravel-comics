<?php
$list = [
            [
                'img' => 'buy-comics-digital-comics-grey.png',
                'text' => 'digital comics'
            ],
            [
                'img' => 'buy-comics-merchandise-grey.png',
                'text' => 'dc merchandise'
            ],
            [
                'img' => 'buy-comics-subscriptions-grey.png',
                'text' => 'subscription'
            ],
            [
                'img' => 'buy-comics-shop-locator-grey.png',
                'text' => 'comic shop locator'
            ],
    ]
?>

<div class="bg-banner-blue infos border-2 border-top">
    <div class="container px-5">
        <div class="row align-items-center">
            @foreach ($list as $item)
                <div class="col-6 col-lg-3 col-xl border-3 border-start border-end py-4 px-2">
                    <img src="{{asset('images/' . $item['img'])}}" alt="{{$item['text']}}">
                    <a class="text-muted text-uppercase ms-2 text-decoration-none" href="#">{{$item['text']}}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>