@extends('welcome')
@section('content')

    <div class="container product-page">
        <h1 class="text-center title_sv">DỰ ÁN ĐÃ THỰC HIỆN</h1><br>
        <p class="text-center des-pr">Đồng hành và chia sẻ sự thành công, tư vấn định hướng với khách hàng là điểm mạnh của chúng tôi.</p>
        <br>
        <br>
        @foreach($products as $product)
            <div class="project-section-page col-md-4 col-sm-6" >
                    <div class="thumb-pr" >
                        <a href="{{$product->link}}" target="_blank"><img src="{{Voyager::image($product->image)}}" alt=""></a>
                    </div>
                    <div class="content">
                        <h2 class="title">
                            <a href="{{$product->link}}" target="_blank" style="text-decoration: none;">{{$product->title}}</a>
                        </h2>
                        <div class="description">
                            {!! $product->description !!}
                        </div>
                    </div>
            </div>
        @endforeach
    </div>
    {{ $products->links('layouts.pagination') }}
@endsection
