<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('image/logo.png')}}" alt="" width="50" height="50" class="img-logo">
            </a>
            <span class="navbar-toggler-icon text-burger"></span>
        </div>
    </nav>
    <!-- carousel -->
    <div id="headercarousels" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators header-slider">
            <button type="button" data-bs-target="#headercarousels" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#headercarousels" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#headercarousels" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('image/v502_724.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="header-text">28 MILLION <br> COMMUNITY</h1>
                    <div class="text-left">
                        <button type="button" class="btn btn-sliders">LETS WORK WITH US</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('image/v502_724.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="header-text">28 MILLION <br> COMMUNITY</h1>
                    <button type="button" class="btn btn-sliders">LETS WORK WITH US</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('image/v502_724.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="header-text">28 MILLION <br> COMMUNITY</h1>
                    <button type="button" class="btn btn-sliders">LETS WORK WITH US</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row " style="margin-top: 75px;">
            <div class="col-md-12">
                <p>
                    Bali United Footbal Club is an indonesian professional club based in Gianyar, Bali. Bali United began operations in 2014
                    and continues to be of the highest tier in the Indonesian footbal competition, league 1. The club has a vision to grow the footbal
                    industry in indonesia through creating an ecosystem consisting of 4Cs namely the Club, Comunity, Corporation and Country.
                    <b class="text-reds">Staying true to this vision</b>, the footbal club launched a sports agency under the name United Creative, to always bring the <b class="text-reds">GAME ON</b>
                    beyond its own club.
                </p>

                <p style="padding-top: 50px;">
                    Warm regards,
                </p>
                <p>
                    <img src="{{asset('image/united_creative.png')}}" alt="" style="margin-left: -125px; margin-top: -18px;">
                </p>
            </div>
        </div>
        <hr style="height: 2px;">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <h3 class="text-titles">Products</h3>
                <div class="text-reds">What we can do for you</div>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="btn btn-outline-danger">VIEW ALL</a>
            </div>
        </div>

        <!-- product -->
        <div class="row" style="margin-top: 50px;">

            @if($product['status_prod'] == 200)
            @foreach($product['product_item'] as $products)
            <div class="col-md-4" style=" height: 300px; position: relative; border: 1px solid black;">
                <div style="background-color: <?= $products['base_color']; ?>; width: 100%; height: 100%; position: absolute; opacity: 75%;left: 0px;"></div>
                <img src="{{$products['url_thumbnail']}}" alt="" style=" object-fit: contain; height: 100%; object-position: center; width: 100%;">
                <div class="" style="position: absolute; top: 85%; color: white; padding-left: 15px; opacity: 75%;"><b>{{$products['name']}}</b></div>
            </div>
            @endforeach
            @else
            <div class="alert alert-danger" role="alert">
                Fail to Fetch all data Product
            </div>
            @endif
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="container">
                <hr>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-middle-slid">WHATS MAKE US DIFFERENT</h2>
                <div id="carousel-mids" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators mids-slider">
                        <button type="button" data-bs-target="#carousel-mids" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-mids" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-mids" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{asset('image/v502_1483.png')}}" class="d-block" height="550px" width="550px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-slider-mids">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore illum hic veritatis, dolor delectus earum atque enim quaerat amet autem explicabo libero nesciunt totam eaque ipsum sint repellendus fugiat blanditiis!.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{asset('image/v502_1483.png')}}" class="d-block" height="550px" width="550px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-slider-mids">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore illum hic veritatis, dolor delectus earum atque enim quaerat amet autem explicabo libero nesciunt totam eaque ipsum sint repellendus fugiat blanditiis!.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('image/v502_1483.png')}}" class="d-block" height="550px" width="550px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-slider-mids">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore illum hic veritatis, dolor delectus earum atque enim quaerat amet autem explicabo libero nesciunt totam eaque ipsum sint repellendus fugiat blanditiis!.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-mids" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-mids" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <hr style="height: 2px;">
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <h3 class="text-titles">Services</h3>
                <div class="text-reds">What we can do for you</div>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="btn btn-outline-danger">VIEW ALL</a>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            @if($servis['status_service'] == 200)
            @foreach($servis['service_item'] as $services)
            <div class="col-md-4" style=" height: 300px; position: relative; border: 1px solid black;">
                <div style="background-color: <?= $services['base_color']; ?>; width: 100%; height: 100%; position: absolute; opacity: 75%;left: 0px;"></div>
                <img src="{{$services['url_thumbnail']}}" alt="" style=" object-fit: contain; height: 100%; object-position: center; width: 100%;">
                <div class="" style="position: absolute; top: 85%; color: white; padding-left: 15px; opacity: 75%;"><b>{{$services['name']}}</b></div>
            </div>
            @endforeach
            @else
            <div class="alert alert-danger" role="alert">
                Fail to Fetch all data Service
            </div>
            @endif
        </div>

        <div class="row" style="margin-top: 50px;">
            <hr>
            <hr>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-middle-slid text-center">OUR WORKS</h2>
            </div>
            <div class="col-md-12">
                <div id="carousel-3-inliners" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators indicator-3-inliners">
                        <button type="button" data-bs-target="#carousel-3-inliners" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-3-inliners" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-3-inliners" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('image/v733_1558.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">NEW INDOMIE VARIANT</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('image/v691_2366.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">BALI UNITED FESTIVAL</div>

                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('image/v691_2372.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">REXONA MEN SOCCER STARS</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('image/v733_1558.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">NEW INDOMIE VARIANT</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('image/v691_2366.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">BALI UNITED FESTIVAL</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('image/v691_2372.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">REXONA MEN SOCCER STARS</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('image/v733_1558.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">NEW INDOMIE VARIANT</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('image/v691_2366.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">BALI UNITED FESTIVAL</div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('image/v691_2372.png')}}" class="d-block w-100" height="417" alt="...">
                                    <div class="text-caption-3-slider">REXONA MEN SOCCER STARS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-3-inliners" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-3-inliners" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 100px;">
            <hr style="height: 2px;">
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <h3 class="text-titles">Clients</h3>
                <div class="text-reds">Our happy client</div>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="btn btn-outline-danger">VIEW ALL</a>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12">
                <div id="carousel-many-bottom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_749.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_744.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_745.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_746.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_747.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_748.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_756.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_751.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_753.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_759.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_761.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_754.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_742.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_757.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_751.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_753.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_759.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_761.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_754.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_742.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_757.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_749.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_744.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_745.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_746.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_747.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_748.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_756.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_751.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_753.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_759.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_761.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_754.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_742.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_757.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_751.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_753.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_759.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_761.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_754.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_742.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_757.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_749.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_744.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_745.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_746.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_747.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_748.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_756.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_751.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_753.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_759.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_761.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_754.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_742.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_757.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                            <div class="row seven-cols">
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_751.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_753.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_759.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_761.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_754.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_742.png')}}" alt="" class="d-block w-100">
                                </div>
                                <div class="col-md-1">
                                    <img src="{{asset('image/v502_757.png')}}" alt="" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-many-bottom" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-many-bottom" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 100px;">
            <h3 class="title-bottom text-center">LET'S CREATE <span class="creative-proj"><b>CREATIVE PROJECT</b></span></h3>
        </div>
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-outline-danger">START PROJECT WITH US</a>
            </div>
        </div>

        <!-- end container -->
    </div>
    <div class="container-fluid" style="margin-top: 100px; background-color: black;">
        <div class="row" style="padding-top: 50px;">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3">
                            <img src="{{asset('image/logo.png')}}" alt="" width="50" height="50" class="img-logo">
                            <P>
                            <div class="text-light">
                                <b>UNITED CREATIVE HEAD OFFICE</b>
                            </div>
                            <P class="text-light">
                                Wisma Bali United,Jalan Panjang No. 29,<br>
                                Kedoya Selatan, Jakarta Barat<br>
                                (021) 12345678
                            </P>
                            </P>
                        </div>
                        <div class="col-md-3" style="padding-top: 60px; padding-left: 85px;">
                            <p class="text-light">
                                Product <br>
                                Services <br>
                                Works <br>
                                Clients <br>
                            </p>
                        </div>
                        <div class="col-md-3" style="padding-top: 60px;">
                            <p class="text-light">
                                About Us <br>
                                Contact Us <br>
                                Career <br>
                            </p>
                        </div>
                        <div class="col-md-3 text-end">
                            <div>
                                <img src="{{asset('image/instagram.png')}}" alt="" width="70px" height="55px">
                            </div>
                            <br>
                            <p class="text-light">
                                COPYRIGHT &copy; 2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>