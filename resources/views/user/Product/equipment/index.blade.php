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

        .pagecontents {
            font-size: 1vw;
            color: black;
            border-collapse: collapse;
            border-bottom: 1px solid;
            width: 80%;
            margin: auto;
        }

        .pagecontents th, .pagecontents td {
            padding: 0.5vw;
        }

        .pagecontents th {
            text-align: center;
        }

        .table_title {
            background-color: #eef1f8;
            border: 1px solid;
            width: 80%;
        }

        .table_id {
            width: 7%;
        }

        .table_date {
            width: 13%;
        }

        .tothedetailpage {
            background-color: white;
            font-size: 2vw;
            color: black;
        }

        .showequipment {
            margin: auto;
            display: -ms-grid;
            display: grid;
            grid-column-gap: 0;
            -ms-grid-columns: 1fr 1vw 1fr;
            grid-template-columns: 50% 50%;
            padding: 1vh 8vw;
            background-color: white;
        }

        .equipment_desc > img {
            width: 20vw;
            height: 32vh;
        }

        .equipment_desc {
            padding: 1vw;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            vertical-align: middle;
            background-color: white;
        }

        .equipment_desc div {
            background-color: white;
        }

        .equipment_desc div p {
            background-color: white;
            text-align: left;
            font-size: 1.3vw;
            font-weight: 600;
        }

        .softwaretable {
            width: 100%;
            border-collapse: collapse;
            padding: 1vh 8vw;
        }

        .softwaretable th, .softwaretable td {
            padding: 1vw;
            text-align: center;
            font-size: 1.2vw;
        }

        .softwaretable td:first-child {
            border-right: 1px solid !important;
        }

        .softwaretable th {
            background-color: #eef1f8;
        }

        .softwaretable th:first-child {
            background-color: #f7f8fc !Important;
        }

        .softwaretable tr:last-child {
            border-bottom: 1px solid;
        }

    </style>

    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('#')}}">Product</a>>
                <a href="{{url('/equipment')}}">보유장비</a></div>
            <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">보유장비</div>
        </div>
        <div class="showequipment">
            <div class="equipment_desc grid-item">
                <img src="/img/product4.png">
                <div>
                    <p>
                        >V22GR = 33개<br>
                        >V33GR = 3개<br>
                        >V56GR = 22개<br>
                        > V77GR = 1개<br><br>

                        합계: 59대
                    </p>
                </div>
            </div>
            <div class="equipment_desc grid-item">
                <img src="/img/product5.png">
                <div>
                    <p>
                        > RP 600 = 2개<br>
                        > RFM 600 = 6개<br>
                        > RFM 600P = 5개<br>
                        > RXP 500 = 16개<br>
                        > RFM 760 = 2개<br>
                        > RXP 801 = 4개<br>
                        > RXP 600(5측) = 1개<br><br>

                        합계: 36대
                    </p>
                </div>
            </div>
        </div>
        <div class="showequipment">
            <div class="equipment_desc grid-item">
                <img src="/img/product4.png">
                <div>
                    <p>
                        >V22GR = 33개<br>
                        >V33GR = 3개<br>
                        >V56GR = 22개<br>
                        > V77GR = 1개<br><br>

                        합계: 59대
                    </p>
                </div>
            </div>
            <div class="equipment_desc grid-item">
                <img src="/img/product5.png">
                <div>
                    <p>
                        > RP 600 = 2개<br>
                        > RFM 600 = 6개<br>
                        > RFM 600P = 5개<br>
                        > RXP 500 = 16개<br>
                        > RFM 760 = 2개<br>
                        > RXP 801 = 4개<br>
                        > RXP 600(5측) = 1개<br><br>

                        합계: 36대
                    </p>
                </div>
            </div>
        </div>
        <hr width="5%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
        <div class="header" style="font-size: 1.6vw; font-weight: 500; color: #000000; text-align:left;">
            소프트웨어
        </div>
        <div style="padding:4.5vw;">
            <table class="softwaretable">
                <tr style="border-top:1px solid; border-bottom: 1px solid;">
                    <th style="border-right:1px solid"></th>
                    <th>설비명</th>
                    <th>MODEl</th>
                    <th>MAKER</th>
                    <th>SPEC</th>
                    <th>수량</th>
                    <th>비고</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>CAD</td>
                    <td>UG NX</td>
                    <td>SIEMENS</td>
                    <td>NX10</td>
                    <td>16</td>
                    <td></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>CAD</td>
                    <td>AUTO CAD</td>
                    <td>AUTODESK</td>
                    <td>V2015</td>
                    <td>1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>CAM</td>
                    <td>WORK NC</td>
                    <td>VERO</td>
                    <td>V24</td>
                    <td>16</td>
                    <td>5축 3개, 3축 13개</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>CAM</td>
                    <td>POWER MILL PRO</td>
                    <td>DEL CAM</td>
                    <td>V2016</td>
                    <td>1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>CAM</td>
                    <td>VERICUT</td>
                    <td>CG TECH</td>
                    <td>V733</td>
                    <td>1</td>
                    <td>CAM 검증 P/G</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>CAM</td>
                    <td>CAD DPCTOR</td>
                    <td>IGPNET</td>
                    <td>SX</td>
                    <td>1</td>
                    <td>MODELING 검증 P/G</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
