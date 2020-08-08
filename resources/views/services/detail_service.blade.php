@extends('welcome')
@section('content')
    <div class="new-section">
    <div class="container">
        <div class="col-md-8 new-content">
{{--            <h1 class="padding-top-37">{{ $item_detail->title }}</h1>--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="post-item">
                    <div class="post-thumb" style="background-image: url({{Voyager::image($item_detail->image)}})">
                    </div>
                    <div class="post-infor">
                        <div class="post-date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            {{Carbon\Carbon::parse($item_detail->created_at)->format('d-m-Y')}}
                        </div>
                        <p>{!!$item_detail->body!!}</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 sticky">
            <div class="sidebox-title text-center">{{$service->title}}</div>
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
        </div>
    </div>
    </div>
@endsection
