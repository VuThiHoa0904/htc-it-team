@extends('welcome')
@section('content')
    <div class="service-page">
    <div class="container ">
        <h1 class="text-center title_sv">DỊCH VỤ TIÊU BIỂU CỦA CHÚNG TÔI</h1><br>
        @foreach($services as $service)
            <div class="project-section-page col-md-6 col-sm-12" >
                <div class="thumb" style="background-image: url({{Voyager::image($service->image)}})">
{{--                    <a href="{{$product->link}}" target="_blank"><img src="{{Voyager::image($product->image)}}" alt=""></a>--}}
                </div>
                <div class="content">
                    <div class="col-md-6">
                    <h2 class="title">
                        <a href="{{route('service.show_detail_service',$service->id)}}" style="text-decoration: none;">{{$service->title}}</a>
{{--                        <a href="/detail-post" target="_blank">{{$service->title}}</a>--}}
                    </h2>
                    </div>
                    <div class="description col-md-6">
                        <p>{!! $service->description !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection
