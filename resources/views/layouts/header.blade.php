@section('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IT CENTER</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <!-- Portfolio CSS -->
    <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/one.css')}}" id="style_theme" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
</head>

<body id="home">
    <!-- Pre Loader -->
    <div id="loader"></div>
    <!-- Color Swicher -->
    <div class="theme-settings" id="switcher">
        <span class="theme-click">
            <i class="fa fa-paint-brush" aria-hidden="true"></i>
        </span>
        <span class="theme-color theme-default theme-active" data-color="one"></span>
        <span class="theme-color theme-color-two" data-color="two"></span>
        <span class="theme-color theme-color-three" data-color="three"></span>
        <span class="theme-color theme-color-four" data-color="four"></span>
        <span class="theme-color theme-color-five" data-color="five"></span>
        <span class="theme-color theme-color-six" data-color="six"></span>
        <span class="theme-color theme-color-seven" data-color="seven"></span>
        <span class="theme-color theme-color-eight" data-color="eight"></span>
    </div>
    <!-- Header -->
    <header>
        <div class="logo-bar fadeInDown" data-spy="affix" data-offset-top="197">
            <div class="container-header">
                <div class="row">
                    <!-- Navigation -->
                    <div class="col-sm-12 col-xs-12 navigation">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span
                                            class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                                <!-- Logo --> <a class="navbar-brand" href="#home">IT CENTER</a></div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="#home" class="smooth-scrool">Trang chủ</a></li>
                                    <li><a href="#aboutus" class="smooth-scrool">Giới thiệu</a></li>
                                    <li><a href="#services" class="smooth-scrool">Dịch vụ</a></li>
                                    <li><a href="#testimonial" class="smooth-scrool">Feedback</a></li>
                                    <li><a href="#portfolio" class="smooth-scrool">Lĩnh vực phát triển</a></li>
                                    <li><a href="#our-team" class="smooth-scrool">Đội ngũ</a></li>
                                    <li><a href="#contactus" class="smooth-scrool">Liên hệ</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner wrapper -->
        <div class="banner-wrapper">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <!-- Overlay -->
                <div class="overlay"></div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
                    <li data-target="#bs-carousel" data-slide-to="1" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="2" class=""></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides">
                        <div class="slide-1"></div>
                        <div class="hero">
                            <h3 class="animated1">IT CENTER</h3>
                            <h1 class="animated2">Báo cáo dữ liệu hàng tuần</h1>
                            <button class="btn btn-hero btn-lg animated3">Liên Hệ</button>
                        </div>
                    </div>
                    <div class="item slides active">
                        <div class="slide-2"></div>
                        <div class="hero">
                            <h3 class="animated1">IT CENTER</h3>
                            <h1 class="animated2">Báo cáo dữ liệu hàng tuần</h1>
                            <button class="btn btn-hero btn-lg animated3">Liên Hệ</button>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-3"></div>
                        <div class="hero">
                            <h3 class="animated1">IT CENTER</h3>
                            <h1 class="animated2">Báo cáo dữ liệu hàng tuần</h1>
                            <button class="btn btn-hero btn-lg animated3">Liên Hệ</button>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left welcome-control" href="#bs-carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right welcome-control" href="#bs-carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </header>
@endsection
@extends('welcome')