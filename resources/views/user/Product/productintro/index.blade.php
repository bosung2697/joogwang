@extends('layouts.app')
@section('content')
    <style>
        .ceoheader {
            margin: 4vh 1vw;
        }

        .ceoheader > div {
            color: #808080;
            font-size: 1.1vw;
            align-items: right;
            text-align: right;
            font-weight: 600;
        }

        .ceoheader > div > a {
            padding: 0 0.3vw;
            color: #808080;
            text-decoration: none;
            -moz-text-decoration-line: none;
            text-underline: none;
            cursor: pointer;
            text-align: right;
        }

        .product_list {
            width: 95%;
            display: -ms-grid;
            display: grid;
            grid-column-gap: 0;
            -ms-grid-columns: 1fr 1vw 1fr 1vw 1fr 1vw 1fr;
            grid-template-columns: 25% 25% 25% 25%;
            text-align: center;
            margin: auto;
        }

        .product_list > .grid-item {

            margin-bottom: 9vh;
        }

        .product_list > .grid-item:nth-child(2), .product_list > .grid-item:nth-child(3), .product_list > .grid-item:nth-child(4), .product_list > .grid-item:nth-child(6), .product_list > .grid-item:nth-child(7), .product_list > .grid-item:nth-child(8) {
            border-left: 1px dashed;
        }

        .product_list > .grid-item > div > .date {
            font-size: 1.2vw;
            font-weight: 700;
            text-align: left;
            padding: 1.4vw 0.5vw 0 0.5vw;
        }


        .product_list > .grid-item > div > .title {
            font-size: 1.3vw;
            text-align: center;
            font-weight: 700;
            padding:2.8vh 0;
        }

        .product_list > .grid-item > img {
            width: 85%;
            height: 22vh;
        }

    </style>
    <div class="container" style="background-color:white;">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/product_intro')}}">Product</a>>
                <a href="{{url('/product_intro')}}">제품소개</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">제품소개</div>
        </div>
        <div class="product_list">
            @forelse($data as $value)
                <div class="grid-item">
                    <img src="{{$value->fileimage}}">
                    <div>
                        <div class="title">{{$value->title}}</div>
                    </div>

                </div>
            @empty
                <div class="grid-item">
                    <img src="/img/no_image.jpg">
                    <div>
                        <div class="date">2016</div>
                        <div class="title">제품소개 테스팅</div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    @if($data->count())
        <div class="text-center" style="text-align:center;">
            {!! $data->render() !!}
        </div>
    @endif
@endsection
