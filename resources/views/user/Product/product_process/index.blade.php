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
                <a href="{{url('/productprocess')}}">생산공정</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">생산공정</div>
        </div>
        <div style="width:100%; text-align:center;">
            <div style="display: -ms-grid; display: grid; grid-column-gap: 0; -ms-grid-columns: 5.5fr 1vw 5fr; grid-template-columns: 55% 50%;">
                <p style="margin:0; padding:8vh 0 0 0; width:100%; color:#171c5f; font-weight: 500; font-size: 1.9vw; text-align:left; line-height: 8vh;">

                    <b style="font-size: 2.3vw;font-weight: 900;">" 고객께서 상상하시는 것을</b>
                    <br>
                    &nbsp; &nbsp; 1. 상호협의와 정보 공유를 통해<br>
                    &nbsp; &nbsp; 2. 설계, 디자인, 제작 등 엄격한 관리시스템을 이용하여<br>
                    &nbsp; &nbsp; 3. 주광정밀(주)만의 노하우로<br>
                    &nbsp; &nbsp; 4. 고품질의 제품을 고객님께 만들어 드립니다."
                </p>
                <img size="100%" style="text-align:right; width:100%;" src="/img/product_process0.png"></div>
            <div style="width:100%;"><img src="/img/product_process.png" width="100%"></div>
        </div>
    </div>
@endsection
