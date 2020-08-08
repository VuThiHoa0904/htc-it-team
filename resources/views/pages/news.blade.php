@extends('welcome')
@section('content')
    <div class="new-section">
    <div class="container margin-top-90" style="position: relative;">
        <div class="col-md-8 new-content">
            <h1 class="menu-bar-pr">Tin tức</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="new-item">
                    <div class="new-one" style="background-image: url({{Voyager::image($post->image)}})">
                    </div>
                     <a href="{{route('posts.show_detail',$post->slug)}}"><h3 class="new_pg">{{ $post->title }}</h3></a>
                    <div class="post-infor">
                        <div class="post-date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            {{Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}}
                        </div>
                        <p>{!!mb_strimwidth($post->meta_description, 0, 150, "...")!!}</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($posts as $item)
                <div class="col-md-6 ">
                    <div class="new-item">
                        <div class="new-thumb" style="background-image: url({{Voyager::image($item->image)}})">
                        </div>
                        <div class="post-infor">
                            <div class="post-date">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                {{Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}
                            </div>
                            <a href="{{route('posts.show_detail',$item->slug)}}"><h3 class="post-title">{{ $item->title }}</h3></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="col-md-4 fix-menu-left">
            <div class="row">
            <h1 class="new-menu-bar-pr">BÀI VIẾT NỔI BẬT</h1>
            @foreach($posts as $item)
                <div class="col-md-12 new-content">
                    <div class="new-item width-389">
                        <div class="menu-new-thumb col-md-4" style="background-image: url({{Voyager::image($item->image)}})">
{{--                            {{URL($item->slug)}}--}}
{{--                            <a href="{{route('posts.show_detail',$item->slug)}}"><img src="{{Voyager::image($item->image)}}" alt="" width="100px" height="100px"></a>--}}
                        </div>
                        <div class="new-infor col-md-8">
                            <a href="{{route('posts.show_detail',$item->slug)}}"><h3 class="new-title text-left">{{ $item->title }}</h3></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    </div>
    {{ $posts->links('layouts.pagination') }}
@endsection
