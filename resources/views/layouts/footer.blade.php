@extends('welcome')
@section('footer')
 <!-- Copy Rights Start -->
    <footer>
        <div class="container">
            <p>&copy; Copyright
                <script type="text/javascript">
                    var d = new Date();
                    document.write(d.getFullYear());
                </script>
                Digital Seo | All Rights Reserved.
            </p>
        </div>
    </footer>
    <!-- Copy Rights End -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>--}}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
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
@endsection