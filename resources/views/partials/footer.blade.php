<div class="container py-4">
    <div class="row py-2">
        <div class="col-lg-5 col-md">
            <div class="row text-white">
                <div class="col">
                    <div class="d-flex flex-column">
                        <div>
                            <h5 class="text-uppercase fw-bold">Dc comics</h5>
                            <ul class="list-unstyled">
                                @foreach ($footerLinks['DcComicsLinks'] as $link)
                                    <li>
                                        <a class="text-decoration-none text-capitalize" href="{{$link['href']}}">{{$link['name']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-uppercase fw-bold">shop</h5>
                            <ul class="list-unstyled">
                                @foreach ($footerLinks['shopLinks'] as $link)
                                    <li>
                                        <a class="text-decoration-none text-capitalize" href="{{$link['href']}}">{{$link['name']}}</a>
                                    </li>
                                @endforeach
                            </ul>                                   
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5 class="text-uppercase fw-bold">Dc</h5>
                        <ul class="list-unstyled">
                            @foreach ($footerLinks['DcLinks'] as $link)
                                <li>
                                    <a class="text-decoration-none text-capitalize" href="{{$link['href']}}">{{$link['name']}}</a>
                                </li>
                            @endforeach
                        </ul> 
                </div>
                <div class="col">
                    <h5 class="text-uppercase fw-bold">sites</h5>
                        <ul class="list-unstyled">
                            @foreach ($footerLinks['sitesLinks'] as $link)
                                <li>
                                    <a class="text-decoration-none text-capitalize" href="{{$link['href']}}">{{$link['name']}}</a>
                                </li>
                            @endforeach
                        </ul> 
                </div>
            </div>
        </div>
        <div class="col">
            <img src="{{asset('images/dc-logo-bg.png')}}" alt="" class="bg-logo overflow-hidden">
        </div>
    </div>
</div>
<div class="bg-banner py-4">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="myButton text-uppercase" href="#">sign-up now</a>
        <div class="d-flex gap-3">
            <div class="fs-5 d-none d-md-block">follow us</div>
                @foreach ($footerLinks['socialList'] as $link)
                    <a href="{{$link['href']}}">
                        <img src="{{asset('images/' . $link['img'])}}" alt="{{$link['alt']}}">
                    </a>
                @endforeach
        </div>
    </div> 
</div>