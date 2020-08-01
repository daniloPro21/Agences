@extends('layouts.app_home')

            @Section('content')

            <!-- Page top section -->
            <section class="page-top-section set-bg" data-setbg="{{ asset('img/page-top-bg.jpg') }}">
                <div class="container text-white">
                    <h2>{{ $property->title }}</h2>
                </div>
            </section>
            <!--  Page top end -->

            <!-- Breadcrumb -->
            <div class="site-breadcrumb">
                <div class="container">
                    <a href=""><i class="fa fa-home"></i>Home</a>
                    <span><i class="fa fa-angle-right"></i>Single Listing</span>
                </div>
            </div>

            <!-- Page -->
            <section class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 single-list-page">
                            <div class="single-list-slider owl-carousel" id="sl-slider">

                                <div class="sl-item set-bg" data-setbg="{{  asset('uploads/'.$property->affiche) }}">
                                    <div class="sale-notic">FOR Rent</div>
                                </div>

                            </div>
                            <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                                @foreach(unserialize($property->image) as $img)
                                <div class="sl-thumb set-bg" data-setbg="{{  asset("uploads/$property->title/".$img) }}"></div>
                                @endforeach
                            </div>
                            <div class="single-list-content">
                                <div class="row">
                                    <div class="col-xl-8 sl-title">
                                        <h2>{{ $property->title }}</h2>
                                        <p><i class="fa fa-map-marker"></i>{{ $property->place }}</p>
                                    </div>
                                    <div class="col-xl-4">
                                        <a href="#" class="price-btn">${{ $property->price }}</a>
                                    </div>
                                </div>
                                <h3 class="sl-sp-title">Property Details</h3>
                                <div class="row property-details-list">
                                    <div class="col-md-4 col-sm-6">
                                        <p><i class="fa fa-th-large"></i>{{ $property->surface }}</p>
                                        <p><i class="fa fa-bed"></i> {{ $property->chambre }}</p>
                                        <p><i class="fa fa-user"></i>{{ $property->user->name }}</p>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <p><i class="fa fa-car"></i> {{ $property->garage  }}</p>
                                        <p><i class="fa fa-building-o"></i> {{ $property->title }}</p>
                                        <p><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse ($property->created_at)->diffForHumans ()}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><i class="fa fa-bath"></i>{{ $property->douche  }}</p>
                                    </div>
                                </div>
                                <h3 class="sl-sp-title">Description</h3>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas fermentum ornareste. Donec index lorem. Vestibulum  aliquet odio, eget tempor libero. Cras congue cursus tincidunt. Nullam venenatis dui id orci egestas tincidunt id elit. Nullam ut vuputate justo. Integer lacnia pharetra pretium. Casan ante ipsum primis in faucibus orci luctus et ultrice.</p>
                                </div>
                                <h3 class="sl-sp-title">Property Details</h3>
                                <div class="row property-details-list">
                                    <div class="col-md-4 col-sm-6">
                                        <p><i class="fa fa-check-circle-o"></i> Air conditioning</p>
                                        <p><i class="fa fa-check-circle-o"></i> Telephone</p>
                                        <p><i class="fa fa-check-circle-o"></i> Laundry Room</p>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <p><i class="fa fa-check-circle-o"></i> Central Heating</p>
                                        <p><i class="fa fa-check-circle-o"></i> Family Villa</p>
                                        <p><i class="fa fa-check-circle-o"></i> Metro Central</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><i class="fa fa-check-circle-o"></i> City views</p>
                                        <p><i class="fa fa-check-circle-o"></i> Internet</p>
                                        <p><i class="fa fa-check-circle-o"></i> Electric Range</p>
                                    </div>
                                </div>
                                <h3 class="sl-sp-title bd-no">Floorplans</h3>
                                <div id="accordion" class="plan-accordion">
                                    <div class="panel">
                                        <div class="panel-header" id="headingOne">
                                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">First Floor: <span>660 sq ft</span>	<i class="fa fa-angle-down"></i></button>
                                        </div>
                                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="panel-body">
                                                <img src="{{ asset('img/plan-sketch.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-header" id="headingTwo">
                                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Second Floor:<span>610 sq ft.</span>	<i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="panel-body">
                                                <img src="{{ asset('img/plan-sketch.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-header" id="headingThree">
                                            <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Third Floor :<span>580 sq ft</span>	<i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="panel-body">
                                                <img src="{{ asset('img/plan-sketch.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar -->
                        <div class="col-lg-4 col-md-7 sidebar">
                            <div class="author-card">
                                <div class="author-img set-bg" data-setbg="{{ asset('img/author.jpg') }}"></div>
                                <div class="author-info">
                                    <h5>Gina Wesley</h5>
                                    <p>Real Estate Agent</p>
                                </div>
                                <div class="author-contact">
                                    <p><i class="fa fa-phone"></i>(567) 666 121 2233</p>
                                    <p><i class="fa fa-envelope"></i>ginawesley26@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-form-card col-lg-12">
                                <h5>Contacter le Depositaire</h5>
                                <form>
                                    <input type="text" placeholder="Your name" value="{{ $property->title }}">
                                    <input type="text" placeholder="Your name"  value="{{ $property->place }}">
                                    <input type="text" placeholder="Your name"  value="{{ $property->city }}">
                                    <input type="text" placeholder="Your name">
                                    <input type="text" placeholder="Your email">
                                    <textarea placeholder="Your question"></textarea>
                                    <button>SEND</button>
                                </form>
                            </div>
                            <div class="related-properties">
                                <h2>Related Property</h2>
                                @foreach($order as $orders)
                                <div class="rp-item">
                                    <div class="rp-pic set-bg" data-setbg="{{ asset('img/feature/1.jpg') }}">
                                        <div class="sale-notic">FOR SALE</div>
                                    </div>
                                    <div class="rp-info">
                                        <h5>{{ $orders->title }}</h5>
                                        <p><i class="fa fa-map-marker"></i>{{ $orders->place }}</p>
                                    </div>
                                    <a href="#" class="rp-price">${{ $orders->price }}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page end -->


            <!-- Clients section -->
            <div class="clients-section">
                <div class="container">
                    <div class="clients-slider owl-carousel">
                        <a href="#">
                            <img src="{{ asset('img/partner/1.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/2.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/3.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/4.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/partner/5.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            @endsection
