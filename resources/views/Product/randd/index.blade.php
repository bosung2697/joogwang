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



    </style>
    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/product_intro')}}">Product</a>>
                <a href="{{url('/RandD')}}">연구개발</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">연구개발</div>
        </div>
    </div>
    <div  style="margin:0 0 8vh 0;">
        <div style="width:100%; text-align:center;">
            <div style="width:100%; margin:0;"><img src="/img/RandD1.PNG" width="100%"></div>
            <div style="width:100%; margin:0;"><img src="/img/RandD2.PNG" width="100%"></div>
            <div style="width:100%; margin:0;"><img src="/img/RandD3.PNG" width="100%"></div>

        </div>
    </div>
@endsection
