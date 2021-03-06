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

        .awarded_list {
            width: 95%;
            display: -ms-grid;
            display: grid;
            grid-column-gap: 0;
            -ms-grid-columns: 1fr 1vw 1fr 1vw 1fr 1vw 1fr;
            grid-template-columns: 25% 25% 25% 25%;
            text-align: center;
            margin: auto;
        }

        .awarded_list > .grid-item {

            margin-bottom: 8vh;
        }

        .awarded_list > .grid-item:nth-child(2), .awarded_list > .grid-item:nth-child(3), .awarded_list > .grid-item:nth-child(4), .awarded_list > .grid-item:nth-child(6), .awarded_list > .grid-item:nth-child(7), .awarded_list > .grid-item:nth-child(8) {
            border-left: 1px dashed;
        }

        .awarded_list > .grid-item > div > .date {
            font-size: 1.2vw;
            font-weight: 700;
            text-align: left;
            padding: 1.4vw 0.5vw 0 0.5vw;
        }

        .awarded_list > .grid-item > div {
            padding-left: 1.8vw;
        }

        .awarded_list > .grid-item > div > .title {
            font-size: 1vw;
            text-align: left;
            font-weight: lighter;
            padding: 0 0.5vw 0 0.5vw;
        }

        .awarded_list > .grid-item > img {
            width: 13vw;
            height: 32vh;
        }
     .pagination{
         justify-content:center;
     }
    </style>

    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/equipment')}}">Product</a>><a
                        href="{{url('/ventureawards')}}">인증수상</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">인증수상</div>
        </div>
        {{--LIST--}}
        <div class="awarded_list">
            @forelse($data as $value)
                <div class="grid-item">
                    <img src="{{$value->fileimage}}">
                    <div>
                        <div class="date">{{$value->awarded_date}}</div>
                        <div class="title">{{$value->title}}</div>
                    </div>

                </div>
            @empty
                <div class="grid-item">
                    <img src="/img/no_image.jpg">
                    <div>
                        <div class="date">2016</div>
                        <div class="title">테스팅</div>
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
