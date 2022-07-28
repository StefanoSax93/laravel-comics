@php
$links = [
    [
        'name' => 'characters',
        'href' => route('characters'),
    ],
    [
        'name' => 'comics',
        'href' => route('comics'),
    ],
    [
        'name' => 'movies',
        'href' => route('movies'),
    ],
    [
        'name' => 'tv',
        'href' => route('tv'),
    ],
    [
        'name' => 'games',
        'href' => route('games'),
    ],
    [
        'name' => 'collectibles',
        'href' => route('collectibles'),
    ],
    [
        'name' => 'videos',
        'href' => route('videos'),
    ],
    [
        'name' => 'fans',
        'href' => route('fans'),
    ],
    [
        'name' => 'news',
        'href' => route('news'),
    ],
    [
        'name' => 'shop',
        'href' => route('shop'),
    ]
];
@endphp

<div class="p-1 bg_primary">
    <div class="container text-white text-end text-uppercase">
        <span>dc power visa</span>
        <span class="ms-5">additional dc sites</span>
    </div>
</div>
<div class="sticky-top bg-white">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <a href="{{route('home')}}"><img src="{{asset('images/dc-logo.png')}}" alt=""></a>
        <ul class="nav">
            @foreach($links as $link)
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-bold {{ Request::route()->getName() === $link["name"] ? 'active' : '' }}" aria-current="page" href="{{$link['href']}}">{{$link['name']}}</a>
                    <div class="hover-bar"></div>   
                </li>
            @endforeach
        </ul>
    </div>
</div>