@extends('welcome')
@section('content')
    <div class="web-section">
        <div class="container">
            <div class="col-md-8 ">
                @foreach($brands as $brand)
                    <div class="web-item col-md-12">
                        <div class="row">
                        <div class="col-md-4 web-img" style="background-image: url({{Voyager::image($brand->image)}});">
{{--                            <img src="{{Voyager::image($website->image)}}" alt="" height="200px" width="200px">--}}
                        </div>
                        <div class="web-info col-md-8">
                            <a href="{{route('service.show_detail',[$brand->service_id,$brand->slug])}}"><h3 class="web_pg">{{ $brand->title }}</h3></a>
                            <div class="post-date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
{{--                                {{$website->created_at->format('d/m/Y')}}--}}
{{--                                {{$website->created_at}}--}}
                                {{Carbon\Carbon::parse($brand->created_at)->format('d-m-Y')}}
                            </div>
                            <p>{!!mb_strimwidth($brand->meta_description, 0, 150, "...")!!}</p>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4 sticky">
                <div class="sidebox-title text-center">{{$service->title}}</div>
    {{--            <ul class="menu_web">--}}
                <div class="post-item">
                    @foreach($title_list as $item)
                                <div class="web-info">
                                    <a href="{{route('service.show_detail',[$item->service_id,$item->slug])}}"><h3 class="web-title">{{ $item->title }}</h3></a>
                                </div>

                    @endforeach
                </div>
                <div class="sidebox-title text-center">Tư vấn website miễn phí</div>
                <div class="post-item" style="padding:25px;">
                    <form method="post" action="{!!route('customer.store')!!}">
                        {{ csrf_field()}}
                          <div class="form-group">
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ tên(*)">
                          </div>
                          <div class="form-group">
                            <input name="phone" type="number" class="form-control" id="exampleInputPassword1" placeholder="Điện thoại(*)">
                          </div>
                          <div class="form-group">
                            <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                          </div>
                          <button type="submit" class="btn btn-primary">Đăng kí ngay</button>
                    </form>
                </div>
    {{--            </ul>--}}
            </div>
        </div>
    </div>
@endsection

