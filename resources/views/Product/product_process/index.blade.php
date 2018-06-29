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
            <div><a href={{url('/')}}>Home</a>><a href="{{url('#')}}">Product</a>>
                <a href="{{url('/productprocess')}}">생산공정</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">생산공정</div>
        </div>
        <div style="width:100%; text-align:center;">
            <div style="width:100%; margin-bottom:8vh;"><img src="/img/product_process1.jpg" width="80%"></div>
            <div style="width:100%;"><img src="/img/product_process2.jpg" width="80%"></div>
        </div>
    </div>
@endsection
