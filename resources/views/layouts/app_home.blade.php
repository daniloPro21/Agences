<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset ('css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
            @yield('extra-js')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homes Page | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>
        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 header-top-left">
                            <div class="top-info">
                                <i class="fa fa-phone"></i>
                                (+88) 666 121 4321
                            </div>
                            <div class="top-info">
                                <i class="fa fa-envelope"></i>
                                info.leramiz@colorlib.com
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-right header-top-right">
                            <div class="top-social">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-pinterest"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="user-panel">
                                    <!-- Authentication Links -->
                                @guest
                                        <a class="fa fa-sign-in" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @if (Route::has('register'))
                                            <a class="fa fa-user-circle-o" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                @else
                                        <a id="navbarDropdown" class="btn btn-google" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                            <a class="fa fa-power-off" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-navbar">
                            <a href="#">
                                <img src="img/logo1.jpg"  class="rounded-circle" alt="" height="100" width="100"></a>
                            <div class="nav-switch">
                                <i class="fa fa-bars"></i>
                            </div>
                            <ul class="main-menu">
                                <li><a href="{{ url('/agence') }}">Home</a></li>
                                <li><a href="{{ url('/categories') }}">MES DEPOTS</a></li>
                                <li><a href="{{ url('/about') }}">ABOUT US</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    <!-- Footer Section Begin -->
        <footer class="footer-section set-bg" data-setbg="{{ asset('img/footer-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-widget">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                        <p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-widget">
                        <div class="contact-widget">
                            <h5 class="fw-title">CONTACT US</h5>
                            <p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi </p>
                            <p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
                            <p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
                            <p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-widget">
                        <div class="double-menu-widget">
                            <h5 class="fw-title">POPULAR PLACES</h5>
                            <ul>
                                <li><a href="">Florida</a></li>
                                <li><a href="">New York</a></li>
                                <li><a href="">Washington</a></li>
                                <li><a href="">Los Angeles</a></li>
                                <li><a href="">Chicago</a></li>
                            </ul>
                            <ul>
                                <li><a href="">St Louis</a></li>
                                <li><a href="">Jacksonville</a></li>
                                <li><a href="">San Jose</a></li>
                                <li><a href="">San Diego</a></li>
                                <li><a href="">Houston</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6  footer-widget">
                        <div class="newslatter-widget">
                            <h5 class="fw-title">NEWSLETTER</h5>
                            <p>Subscribe your email to get the latest news and new offer also discount</p>
                            <form class="footer-newslatter-form">
                                <input type="text" placeholder="Email address">
                                <button><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Featured Listing</a></li>
                            <li><a href="">About us</a></li>
                            <li><a href="">Pages</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Js Plugins -->
        <script src="{{ asset ('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset ('js/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset ('js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset ('js/main.js') }}"></script>
    
</body>
</html>
