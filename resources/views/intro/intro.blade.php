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
    .header{
        width:10%!important;
    }


    .CeoIntro {
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: 3fr 1vw 7fr;
        grid-template-columns: 30% 70%;
        padding: 10px;
        text-align: center;
    }

    .intro_content {
        font-size: 1.3vw;
        line-height: 6vh;
    }
</style>
    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/intro')}}">About Us</a>><a href="{{url('/intro')}}">CEO 인사말</a></div>
            <hr width="5%;" align="left"; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">CEO 인사말</div>
        </div>
        <div>
            <img src="/img/intro.JPG" style=" width:100%;">
        </div>
        {{--<div class="CeoIntro">--}}
            {{--<div style="margin:2vw;"><img width="100%" src="/img/no_image.jpg"></div>--}}
            {{--<div style="text-align:left;">--}}
                {{--<h3 style="font-size:2.3vw; margin-bottom:3.5vh; font-weight:600; color:#084e86;"><i--}}
                            {{--style="font-style:normal; color:#4697d3;">"주광정밀(주)</i>을 방문하신 것을 환영합니다!!"</h3>--}}
                {{--<b style="font-size:1.3vw; font-weight:700;">신뢰와 믿음을 주는 기업!</b>--}}
                {{--<p class="intro_content" style="margin-bottom:1.5vw; text-align:left;">--}}
                    {{--호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로--}}
                    {{--호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로--}}
                    {{--호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로 호롤롤ㄹ로로로로로로로로로로--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection
