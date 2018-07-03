@extends('layouts.app')
@section('content')
    <style>
        .p_o_b_desc>table>tbody>tr>td>p{
            margin:0;
            font-size:1vw;
            font-weight:600;
        }

        .ceoheader {
            margin: 4vh 0;
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

        .ceoheader .header {
            font-size: 1.6vw;
            font-weight: 500;
            color: #000000;
            text-align: left;
        }

        .company_intro {
            width: 100%;
            margin: auto;
            padding: 0;
        }

        
        .company_intro td {
            padding: 1.5vw;
            border-bottom: 0.5px solid #586699;
        }

        .company_intro table {
            width: 100%;
            margin: 2.5vh 0;
            padding: 0;
            border-collapse: collapse;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .content_name {
            background-color: #fcefec;
            font-weight: 700;
            color: black;
            width: 19%;
            font-size: 1.5vw;
        }

        .company_intro_content {
            font-size: 1.4vw;
            background-color: white;
            color: black;
            font-weight: 500;
            width: 77%;
        }

        .local_or_foreign {
            font-size: 1.3vw;
            font-weight: 700;
            color: #546eb4;
            padding:2vh 0;
        }

        .p_o_b_intro {
            width: 100%;
            margin: auto;
            padding: 0;
            background-image: url('/img/intro3.png');
            background-position: 80% 174%;
            background-size:25%;
            background-repeat: no-repeat;
        }

        .p_o_b {
            display: -ms-grid;
            display: grid;
            grid-column-gap: 0;
            -ms-grid-columns: 1fr 1vw 1fr;
            grid-template-columns: 50% 50%;
            padding-top: 10px;
        }

        .p_o_b img {
            width: 100%;
            height: 12vh;
        }

        .p_o_b_desc table {
            font-size: 1.3vw;
        }

        .p_o_b_desc {
            padding-left: 4.5vw;
        }

        .p_o_b_desc td {
            padding: 1vw;
        }
        .business_location_name{
            vertical-align: top;
            font-weight:800;
            font-size:1vw;
        }
        .company_intro>div>table>tbody>tr>td{
            font-size:1vw;
        }

    </style>
    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/intro')}}">About Us</a>><a
                        href="{{url('/company_status')}}">기업현황</a></div>
            <hr width="5%;" align="left"; style="border:thin solid #667ebc; margin: 0;">
            <div class="header">기업현황</div>
        </div>
        <div class="company_intro">
            <div>
                <div style="font-size:1.3vw; color:black; font-weight:700; padding: 1vh 0;">회사 소개</div>
                <table>
                    <tr>
                        <td class="content_name">
                            회사명
                        </td>
                        <td class="company_intro_content">
                            주광정밀(주)
                        </td>
                    </tr>
                    <tr>
                        <td class="content_name">
                            설립일
                        </td>
                        <td class="company_intro_content">
                            1994년 3월 14일 (2002년 5월 1일 법인 전환)
                        </td>
                    </tr>
                    <tr>
                        <td class="content_name">
                            총인원
                        </td>
                        <td class="company_intro_content">
                            305명
                        </td>
                    </tr>
                    <tr>
                        <td class="content_name">
                            사업 영역
                        </td>
                        <td class="company_intro_content">
                            금형전극 전문제작, 메탈 지그, 열성형 금형 지그, 반도체 지그, 렌즈금형가공(자동차, 카메라)
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="p_o_b_intro">
            <div style="font-size:1.3vw; color:black; font-weight:700; padding: 1vh 0;">사업장 소개</div>
            <div>
                <div class="local_or_foreign">국내</div>
                <div class="p_o_b">
                    <img size=100 src="/img/intro1.png" class="grid-item">
                    <div class="p_o_b_desc grid-item">
                        <table>
                            <tr>
                                <td class="business_location_name">구미 사업장(본사)</td>
                                <td><p>경북 구미시 1공단로 10길 55 (공단동)</p>
                                    <p>TEL : 054-461-3732 FAX : 054-461-3735</p></td>
                            </tr>
                            <tr>
                                <td class="business_location_name">구미 사업장(2공장)</td>
                                <td><p>경북 구미시 1공단로 7길 36-13 (공단동)</p>
                                    <p>TEL : 054-465-3763 FAX : 054-465-3764</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="p_o_b">
                    <img src="/img/intro1.png" class="grid-item">
                    <div class="p_o_b_desc grid-item">
                        <table>
                            <tr>
                                <td class="business_location_name">광주 사업장</td>
                                <td style="padding-left: 4.1vw;"><p>광주광역시 북구 첨단연신로 70 (연제동)</p>
                                    <p>TEL : 062-972-3731 FAX : 062-972-3730</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="local_or_foreign" style="padding-top:10vh;">국외</div>
                <div class="p_o_b" style="padding: 0 0 6vh 0;">
                    <img src="/img/intro2.png" class="grid-item">
                    <div class="p_o_b_desc grid-item">
                        <table>
                            <tr>
                                <td class="business_location_name">베트남 현지법인</td>
                                <td style="padding-left:2.5vw;"><p>Plot CN8-1, Diem Thuy Industrial Zone,</p>
                                    <p>Diem Thuy commune, Phu Binh district</p>
                                    <p>Thai Nguyen province Viet Nam</p>
                                    <p>TEL : 0280-3931-732 FAX : 0280-3931-735</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
