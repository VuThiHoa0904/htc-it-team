@extends('welcome')
@section('content')
    <div class="google-map" style="background-image: url({{asset('image/bgr.jpg')}})">
        <div class="container">
            <div class="contact_page">
                    <div class="contact-page-inner">
                    <div class=" contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.8364846705786!2d105.83232741424474!3d21.59230487367802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313527943d2a7f51%3A0x50ba15fcd0f3f391!2zSFRDIC0gVHJ1bmcgdMOibSDEkMOgbyB04bqhbyB2w6AgUGjDoXQgdHJp4buDbiBOZ3Xhu5NuIE5ow6JuIEzhu7Fj!5e0!3m2!1svi!2s!4v1591956546030!5m2!1svi!2s"
                            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>
                    <div class=" lien-he">
                        <div class="new-logo">
                            <img src="{{Voyager::image(setting('site.logo'))}}" alt="" width="250px" height="80px">
                        </div>
                        <ul>
                            <li><i class="fa fa-map-marker" style="padding-right: 10px;"></i> Địa chỉ: {!! setting('site.address') !!}</li>
{{--                            <br>--}}
                            <li><i class="fa fa-phone" style="padding-right: 10px;"></i> Hotline: {!! setting('site.hotline') !!}</li>
{{--                            <br>--}}
                            <li><i class="fa fa-envelope-o" style="padding-right: 10px;"></i> Email: {!! setting('site.email') !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
