@extends('layouts.main_layout')

@section('page_title', $comic['title'])

@section('page_content')

    <div class="slide-style">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="">
    </div>
    <div class="bg_primary" style="padding: 30px 0"></div>
    <div class="container comic">
        <div class="comic-thumb">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        
        <div class="py-5 ">
            <h6 class="text-end text-muted text-uppercase">advertisement</h6>
            <div class="row">
                <div class="col-8">
                    <h2 class="text-uppercase">{{$comic['title']}}</h2>
                    <div class="bg-green text-white">
                        <div class="row">
                            <div class="col-8 border-end border-2 border-secondary" >
                                <div class="d-flex align-items-center justify-content-between p-2">
                                    <div>
                                        <span style="opacity: 0.6">U.S. Price: </span>
                                        <span>{{$comic['price']}}</span>
                                    </div>
                                    <div style="opacity: 0.6">AVAILABLE</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-2">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle border-0 bg-transparent text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Check Availability
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-2 text-secondary">{{$comic['description']}}</p>
                </div>
                <div class="col">
                    <div class="ps-4">
                        <img src="{{asset('images/adv.jpg')}}" class="mw-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4 border-top border-2 infos">
        <div class="container comic">
            <div class="row gap-3">
                <div class="col">
                    <h3 class="mb-3">Talent</h3>
                    <div class="py-3 border-top">
                        <div class="row">
                            <div class="col-3 fw-bold">Art by:</div>
                            <div class="col">
                                @foreach ($comic['artists'] as $artist)
                                    <span class="text_primary" style="font-size: 14.5px">{{$artist}}</span>
                                    @if (!$loop->last)
                                        <span>, </span>   
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="py-3 border-top border-bottom">
                        <div class="row">
                            <div class="col-3 fw-bold">Written by:</div>
                            <div class="col">
                                @foreach ($comic['writers'] as $writer)
                                    <span class="text_primary" style="font-size: 14.5px">{{$writer}}, </span>
                                    @if (!$loop->last)
                                        <span>, </span>   
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col">
                    <h3 class="mb-3">Specs</h3>
                    <div class="py-3 border-top">
                        <div class="row">
                            <div class="col-3 fw-bold">Series:</div>
                            <div class="col">
                                <span class="text-uppercase text_primary">{{$comic['series']}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="py-3 border-top">
                        <div class="row">
                            <div class="col-3 fw-bold">U.S. Price:</div>
                            <div class="col">
                                <span>{{$comic['price']}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="py-3 border-top">
                        <div class="row">
                            <div class="col-3 fw-bold">On Sale Date:</div>
                            <div class="col">
                                <span>{{$comic['sale_date']}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.banner_grey')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@endsection