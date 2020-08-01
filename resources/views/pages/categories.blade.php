@extends('layouts.app_home')

 @Section('content')
     <!-- Page top section -->
     <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
         <div class="container text-white">
             <h2>Vos Depots</h2>
         </div>
     </section>
     <!--  Page top end -->

     <!-- Breadcrumb -->
     <div class="site-breadcrumb">
         <div class="container">
             <a href=""><i class="fa fa-home"></i>Home</a>
             <span><i class="fa fa-angle-right"></i>Featured Listings</span>
         </div>
     </div>
     <div class="site-breadcrumb">
         <div class="container">
             <a href="{{route('properties.create') }}" class="btn btn-outline-success">Ajouter Maison</a>
         </div>
     </div>


     <!-- page -->
     <section class="page-section categories-page">
         <div class="container">

             <div class="row">
                 @foreach($properties as $propertie)
                 <div class="col-lg-4 col-md-6">
                     <!-- feature -->
                     <div class="feature-item">

                         <div class="feature-pic set-bg" data-setbg="{{  asset('uploads/'.$propertie->affiche) }}">
                             <div class="sale-notic">FOR RENT</div>
                         </div>
                         <div class="feature-text">

                             <div class="text-center feature-title">
                                 <h5>{{ $propertie->place }}</h5>
                                 <p><i class="fa fa-map-marker"></i> {{ $propertie->city }}</p>
                             </div>
                                 <div>
                                     <a href="{{ route('properties.show', ['id' => $propertie->id ]) }}" class="room-price">Voir</a>
                                 </div>
                             </div>
                             <div class="room-info-warp">
                                 <div class="room-info">
                                     <div class="rf-left">
                                         <p><i class="fa fa-th-large"></i> {{ $propertie->surface }}</p>
                                         <p><i class="fa fa-bed"></i> {{ $propertie->chambre }}</p>
                                     </div>
                                     <div class="rf-right">
                                         <p><i class="fa fa-car"></i> {{ $propertie->garage }}</p>
                                         <p><i class="fa fa-bath"></i>{{ $propertie->douche }}</p>
                                     </div>
                                 </div>
                                 <div class="room-info">
                                     <div class="rf-left">
                                         <p><i class="fa fa-user"></i> {{ $propertie->user->name }}</p>
                                     </div>
                                     <div class="rf-right">
                                         <p><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse ($propertie->created_at)->diffForHumans ()}}</p>
                                     </div>
                                 </div>

                             </div>
                             <a href="#" class="room-price">${{ $propertie->price }}</a>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>
     <!-- page end -->


     <!-- Clients section -->
     <div class="clients-section">
         <div class="container">
             <div class="clients-slider owl-carousel">
                 <a href="#">
                     <img src="img/partner/1.png" alt="">
                 </a>
                 <a href="#">
                     <img src="img/partner/2.png" alt="">
                 </a>
                 <a href="#">
                     <img src="img/partner/3.png" alt="">
                 </a>
                 <a href="#">
                     <img src="img/partner/4.png" alt="">
                 </a>
                 <a href="#">
                     <img src="img/partner/5.png" alt="">
                 </a>
             </div>
         </div>
     </div>
@stop
