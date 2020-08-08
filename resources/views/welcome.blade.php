<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KennaTech</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
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
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/one.css')}}" id="style_theme" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{Voyager::image(setting('site.icon'))}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>

    {{--    slide customer--}}

</head>

<body id="home">
<!-- Pre Loader -->
{{--    <div id="loader"></div>--}}
<!-- Color Swicher -->
<!-- Header -->
<header>
    <div class="logo-bar stricky">
        <div class="container-header">
            <div class="row">
                <!-- Navigation -->
                <div class="col-sm-12 col-xs-12 navigation">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle"><span
                                    class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span></button>
                            <!-- Logo --> <a class="navbar-brand" href="/"><img
                                    src="{{Voyager::image(setting('site.logo'))}}" alt="" width="250px"
                                    height="80px"></a></div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <?= menu('main_menu', 'my_menu');?>
                            </ul>
                            <a href="#test-popup" class="btn-register open-popup-link">
                                ĐĂNG KÝ TƯ VẤN
                            </a>
                            <div id="test-popup" class="white-popup mfp-hide">
                                <div class="form-popup-register">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="logo">
                                                <img src="{{Voyager::image(setting('site.logo'))}}" alt="" width="250px"
                                                     height="80px">
                                            </div>
                                            <div class="pop-up-contact">
                                                <h5>
                                                    Thông tin liên hệ
                                                </h5>
                                                <div class="content">
                                                    <p>Địa chỉ: {!! setting('site.address') !!}</p><br>
                                                    <p>Hotline: {!! setting('site.hotline') !!}</p><br>
                                                    <p>Email: {!! setting('site.email') !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-register">
                                                <h3 class="form-title">
                                                    ĐĂNG KÝ TƯ VẤN
                                                </h3>
                                                <p>Mời bạn điền vào các trường thông tin dưới đây, chúng tôi sẽ gọi lại
                                                    cho bạn.
                                                    Cuộc gọi hoàn toàn miễn phí!</p>
                                                <form method="POST" action="{{route('customer.store')}}">
                                                    {{ csrf_field()}}
                                                    <div class="form-group">
                                                        <label>Tên của bạn</label>
                                                        <input type="text" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Số điện thoại (*)</label>
                                                        <input type="text" required name="phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit">Gửi đi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
<main class="py-4">
    @yield('content')
</main>
<footer>
    <div class="footer-left footer-item bg-light">
        <h1 class="block-title light text-center">
            Liên hệ
        </h1>
        <div class=" contact_detail text-right" >
            <p style="color: white; font-size: 16px;">Địa chỉ: {!! setting('site.address') !!}</p><br>
            <p style="color: white; font-size: 16px;">Hotline: {!! setting('site.hotline') !!}</p><br>
            <p style="color: white; font-size: 16px;">Email: {!! setting('site.email') !!}</p>
{{--            {!! setting('site.contact') !!}--}}
        </div>
        <div class="social text-center">
            <ul class="social-list">
                <li>
                    <a href="{{setting('site.face')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="{{setting('site.email')}}"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-right" id="contact">
        <div class="col-md-12 footer-item">
            <form id="contact-form" method="post" action="{!!route('customer.store')!!}">
                {{ csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <input name="name" class="form-control input-lg" id="first-name"
                               placeholder="Họ và Tên*"
                               type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <input name="phone" class="form-control input-lg" id="phone" placeholder="Số điện thoại"
                               required
                               type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <input name="email" class="form-control input-lg" id="email" placeholder="E-mail*"
                               required
                               type="email">
                    </div>
                    <div class="form-group col-md-6">
                        <input name="subject" class="form-control input-lg" id="subject" placeholder="Tiêu đề"
                               type="text">
                    </div>
                    <div class="form-group col-md-12">
                                                       <textarea rows="5" name="message" class="form-control input-lg"
                                                                 id="description"
                                                                 placeholder="Nội dung"></textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="text-left contact-box">
                            <button type="submit" class="button-small">Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Copy Rights Start -->
    <div style="margin: auto; padding: 15px 0; background-color: white;">
        <div class="container">
            <p>&copy; Copyright
                <script type="text/javascript">
                    var d = new Date();
                    document.write(d.getFullYear());
                </script>
                KennaTeach | All Rights Reserved.
            </p>
        </div>
    </div>
    <!-- Copy Rights End -->
</footer>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle"> <a href="{{setting('site.hotline')}}" class="pps-btn-img"> <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
    </div>
    <div class="hotline-bar">
        <a href="{{setting('site.hotline')}}"> <span class="text-hotline">{{setting('site.hotline')}}</span> </a>
    </div>

</div>
<div class="float-icon-hotline">
    <ul class ="left-icon hotline">
        <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://zalo.me/0989406446"><i class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
        <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://www.messenger.com/t/107205611039963"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
    </ul>
</div>
<script src="{{asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments)
    };
    gtag('js', new Date());

    gtag('config', 'UA-83282272-3');

</script>

</body>
</html>

