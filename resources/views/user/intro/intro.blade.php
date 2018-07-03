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
        grid-template-columns: 27.3% 73.7%;
        padding: 10px;
        text-align: center;
    }

    .intro_content {
        font-size: 1.2vw;
        font-weight:600;
        line-height: 5.2vh;
    }
</style>
    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/intro')}}">About Us</a>><a href="{{url('/intro')}}">CEO 인사말</a></div>
            <hr width="5%;" align="left"; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">CEO 인사말</div>
        </div>
        <div class="CeoIntro">
            <div class="grid-item" style="padding:0 2.5vw 0 0;"><img width="100%" src="/img/profile.png"></div>
            <div class="grid-item" style="text-align:left;">
                <h3 style="font-size:2.2vw; margin-bottom:3.5vh; font-weight:600; color:#084e86;"><i
                            style="font-style:normal; color:#4697d3;">"주광정밀(주)</i>을 방문하신 것을 환영합니다!!"</h3>
                <b style="font-size:1.4vw; font-weight:900;">신뢰와 믿음을 주는 기업!</b>
                <p class="intro_content" style="margin-bottom:1.5vw; text-align:left;">
                  지난 20여년 간 흑연전극가공 분야에서 많은 성장을 거듭해온 주광정밀(주)의 오늘이 있기까지<br>
                    아낌없는 격려와 성원을 보내주신 여러분들께 진심으로 감사드립니다.<br><br>
                    주광정밀은 고객과 협의하여, 생산성 향상과 작업성이 편리한 제품을 제작하여, 공급함에 있어 많은 노력을 기울여 왔습니다.<br>
                    저희는 금형 제작에 필요한 공정도의 생산 설비와 우수한 인력을 바탕으로 고객 만족의 극대화를 위해<br>
                    <b style="color:#11327e;font-size: 1.2vw;font-weight:600;">High Quality, Low Cost, Quick Delivery</b>를 최우선으로 하고 있으며,
                    <b style="color:#11327e;font-size: 1.2vw;font-weight:600;">After Service</b>를 위해 늘 최선을 다 하고 있습니다.<br>
                    특히, 국내외 흑연전극 가공의 선두 주자로서, 휴대폰 금형의 소형전극에서 부터<br>
                    자동차 금형의 대현전극에 이르기까지 다양한 가공 기술을 축적하고 있습니다.<br><br>
                    앞으로 주광정밀은 끊임없는 기술 개발과 품질향상, 공정개선을 통하여 귀사가 요구하는 품질과 원가절감,<br>
                    나아가 대외경쟁력 강화에 부응할 수 있도록 최선을 다하겠습니다.<br><br>
                <b style="font-size:2.5vw; font-weight:600;">鑄光精密(株) 代表理事 尹在鎬</b>
                </p>
            </div>
        </div>
    </div>
@endsection
