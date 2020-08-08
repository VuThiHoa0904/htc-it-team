@extends('welcome')
@section('content')
    <!-- Banner wrapper -->
    <div class="banner-wrapper">
        <div class="owl-carousel banner-slider"  data-autoplay="true" data-nav="false" data-dots="false" data-loop="True"
             data-margin="20"
             data-responsive='{"0":{"items":1},"480":{"items":1},"768":{"items":1},"992":{"items":1},"1200":{"items":1}}'>
            @foreach($banners as $item)
               <div class="item slides">
                   <div class="thumb">
                       <img src="{{ Voyager::image($item->image )}}">
                   </div>
                    <div class="content">
                        <div class="title">
                            {{$item->title}}
                        </div>
                        <div class="descreption">
                            {{$item->content}}
                        </div>
                        @if(!empty($item->link))
                            <a href="{{ $item->link }}">Xem thêm >></a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        <section class="project-section">
            <div class="container">
                <h1 class="block-title">SẢN PHẨM</h1>
                <div class="project-section-inner">
                    <div class="content">
                        <div class="meta">
                            <h5 class="name">
                                {{$product->name.' / '}}
                            </h5>
                            <span class="date">
                                {{$product->created_at->format('d M,Y')}}
                            </span>
                        </div>
                        <h2 class="title">
                            {{$product->title}}
                        </h2>
                        <div class="description">
                            {!! $product->description !!}
                        </div>
                        <a class="more-link" href="{{$product->link}}" target="_blank">Đi đến</a>
                    </div>
                    <div class="thumb">
                        <img src="{{Voyager::image($product->image)}}" alt="{{$product->description}}">
                    </div>
                </div>
            </div>
        </section>
        <section class="services-section">
            <div class="container">
                <h1  class="block-title light">DỊCH VỤ CỦA CHÚNG TÔI</h1>
                @foreach($services as $item)
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box">
                            <div class="icon-left">
                                <img src="{{asset($item->icon)}}" width="109px" height="109px"/>
                            </div>
                            <div class="icon-content">
                                <h4 class="title">{{$item->title}}</h4>
                                <p>{{$item->description}}</p>
                            </div>
                            <a class="button-small" href="{{route('service.show_detail_service',$item->id)}}">Xem thêm</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="home-register">
            <div class="container">
                <div class="home-register-inner" data-aos="fade-up" data-aos-delay="1000">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="register-phone__title">Đăng ký tư vấn ngay</div>
                            <div class="register-phone__subtitle">Để được nhận các khuyến mãi mới nhất</div>
                        </div>
                        <div class="col-md-8 col-sm-12 register-form">
                            <form class="register-form" action="{{route('customer.store')}}" method="post">
                                {{ csrf_field()}}
                                <input type="text" placeholder="Nhập số điện thoại của bạn..." name="phone">
                                <div class="btn-submit">
                                <button type="submit">
                                    Đăng ký
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{-- <h1>Đội ngũ của chúng tôi</h1>--}}
        <section id="our-team" class="our-team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="block-title">ĐỘI NGŨ CỦA CHÚNG TÔI...</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ult-carousel-wrapper  vc_custom_1466721383271  ult_horizontal" id="ult-carousel-19223484825e4375e12cf3b" data-gutter="15" data-rtl="false">
                        <!-- Portfolio Wrap -->
                        <div class="row portfolio-container ult-carousel-12721472065e4375e12cebcd" >
                            <!-- single portfolio -->
                            <div class="owl-carousel team-slider"  data-autoplay="true" data-nav="true" data-dots="false" data-loop="false"
                                 data-margin="20"
                                 data-responsive='{"0":{"items":1},"480":{"items":1},"768":{"items":2},"992":{"items":3},"1200":{"items":4}}'>
                                    @foreach($teams as $item)
                                            <div class="single-team-item" >
                                                <div class="team-image">
                                                    <a href="#">
                                                        <img src="{{asset($item->image)}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="team-content">
                                                    <h3>{{$item->name}}</h3>
                                                    <span class="designation">{{$item->job}} <br> {{($item->content)}}</span>
                                                    {{--                            <p>.<br>--}}
                                                    <p><i>Phone:</i> {{$item->phone}}<br>
                                                        <i>Email:</i> {{$item->email}}</p>
                                                    <ul>
                                                        <li><a href="{{asset($item->facebook)}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                        <li><a href="{{asset($item->zalo)}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-image: url({{asset('image/background_camket.jpg')}})">
            <div class="container">
                <h1 class="block-title">CAM KẾT CỦA CHÚNG TÔI</h1>
                    <div class="commitment">
                        <div class="col-md-4 margin-top-69">
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Cung cấp Source Code
                                    </h5>
                                    <div class="description">
                                         Chúng tôi luôn sẵn sàng cung cấp Source Code để khách hàng có thể tự tùy chỉnh.
                                    </div>
                                </div>
                            </div>
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Thực hiện đúng tiến độ
                                    </h5>
                                    <div class="description">
                                        Bàn giao website đúng thời gian cam kết ban đầu.
                                    </div>
                                </div>
                            </div>
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Đáp ứng mọi yêu cầu của khách hàng
                                    </h5>
                                    <div class="description">
                                        Chỉnh sửa theo yêu cầu đến khi nào khách hàng hài lòng.
                                    </div>
                                </div>
                            </div>
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Bảo hành trọn đời
                                    </h5>
                                    <div class="description">
                                        Khách hàng sẽ được bảo trì, sửa lỗi hoàn toàn miễn phí nếu có lỗi phát sinh.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="commitment-thumb">
                            <img src="{{asset('image/Untitled-4-04.png')}}">
                            </div>
                        </div>
                        <div class="col-md-4 margin-top-69">
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Lưu trữ không giới hạn
                                    </h5>
                                    <div class="description">
                                        Dữ liệu hoàn toàn động, không hạn chế bài viết, sản phẩm, số trang.
                                    </div>
                                </div>
                            </div>
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Hỗ trợ nhanh, tận tình
                                    </h5>
                                    <div class="description">
                                        Với đội ngũ nhân viên, kỹ thuật viên chuyên nghiệp, KennaTech cam kết phục vụ khách hàng 24/7.
                                    </div>
                                </div>
                            </div>
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Nâng cấp không giới hạn
                                    </h5>
                                    <div class="description">
                                        Dễ dàng nâng cấp giao diện cũng như các tính năng mới.
                                    </div>
                                </div>
                            </div>
                            <div class="commitment-item">
                                <div class="icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        Chính sách hoàn tiền
                                    </h5>
                                    <div class="description">
                                       Chúng tôi sẽ hoàn 100% chi phí nếu website không đúng theo cam kết trong hợp đồng.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    <section>
        <div class="container">
            <h1 class="block-title">TIN TỨC - THƯ VIỆN SỐ</h1>
            {{--    Hiển thị 1 bài trong trang chủ--}}

    {{--            {{$post->name}}--}}
    {{--            <h6 class="title">{{$post->title}}</h6>--}}
    {{--            <img alt="" src="{{Voyager::image($post->image)}}" width="100px" height="100px">--}}
    {{--            <p><em>{!!$post->body!!}</em></p>--}}

            {{--    Hiển thị hết trong trang landing-page--}}
            <div class="row">
            @foreach($posts as $item)
                <div class=" col-md-4 col-sm-12">
                    <div class="post-item">
                        <div class="post-thumb" style="background-image: url({{Voyager::image($item->image)}})">
                        </div>
                        <div class="post-infor">
                            <div class="post-date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                {{$item->created_at->format('d/m/Y')}}
                            </div>
                            <h3 class="post-title">{{ mb_strimwidth($item->title, 0, 80, "...") }}</h3>
                        <a class="more-link" href="{{route('posts.show_detail',$item->slug)}}">Đọc tiếp</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
