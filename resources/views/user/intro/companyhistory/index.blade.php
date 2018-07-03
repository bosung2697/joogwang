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
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/intro')}}">About Us</a>>
                <a href="{{url('/companyhistory')}}">회사연혁</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">회사연혁</div>
        </div>
        <div style="width:100%; text-align:center;">
            <div style="width:100%; margin-bottom:8vh;"><img src="/img/companyhistory.jpg" width="80%" style="margin: 4vh 1vw;"></div>
        </div>
    </div>
@endsection
