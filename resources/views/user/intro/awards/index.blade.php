@extends('layouts.app')
@section('content')
    <style>

        .pagination {
            justify-content: center!important;
            font-size: 2vw!important;
            font-weight:500!important;
            color:black!important;
        }
        .page-item.active .page-link {
            z-index: 1;
            color: #ff0000;
            background-color: white!important;
            border: none!important;
        }
        .page-item.active .page-link:hover{
            background-color:white!important;
            color:#FF0000!important;
        }
        .pagination>li>a, .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #000000;
            text-decoration: none;
            background-color: #fff;
            border: none;
        }
        .page-link:not(:disabled):not(.disabled) :hover{
            cursor: pointer;
            background-color:white!important;
            color:#000000!important;
        }
        .page-link:not(:disabled):not(.disabled){
            cursor: pointer;
            background-color:white!important;
        }
        .page-item:last-child .page-link {
            margin-left: 8vw!important;
            background-color:white!important;
        }

        .page-item:last-child .page-link :hover{
            background-color:white!important;
        }

        .page-item:first-child .page-link{
            margin-right:8vw!important;
            background-color:white!important;
        }

        .page-item:first-child .page-link:hover{
            background-color:white!important;
        }
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
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/intro')}}">About Us</a>><a
                        href="{{url('/awards')}}">수상실적</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">수상실적</div>
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
