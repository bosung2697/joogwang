@extends('layouts.app')
<style>
    .maincontainer {
        margin: 0;
    }

    .mainimage {
        height: 50%;
        width: 100%;
        margin: 0;
    }

    .mainpage_list {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2vw 5vw 2vw 3vw;
        background-color: #3b5493;
    }

    .listname {
        vertical-align: top;
        color: white;
        height: 20vh;
        text-align: center;

    }

    .mainpage_list img {
        width: 11vw;
        height: 20vh;
        border: 1px solid #006400;
    }

    .noticelist {
        display: grid;
        display: -ms-grid;
        grid-column-gap: 3vw;
        -ms-grid-columns: 1fr 1vw 1fr;
        grid-template-columns: 50% 50%;
        text-align: center;
        width: 95%;
    }

    .noticelistheader {
        border-bottom: 1px solid #d3d3d3;
        margin: 1vw;
    }

    .justify_content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
@section('content')
    <div class="maincontainer">
        <div>
            <img class="mainimage" src="http://127.0.0.1:8000/img/no_image.jpg"/>
        </div>
        <div class="mainpage_list">
            <div class="listname" style="font-size: 2.5vw;font-weight: 900;">
                CSR
            </div>
            <img src="http://127.0.0.1:8000/img/no_image.jpg"/>
            <img src="http://127.0.0.1:8000/img/no_image.jpg"/>
            <img src="http://127.0.0.1:8000/img/no_image.jpg"/>
            <img src="http://127.0.0.1:8000/img/no_image.jpg"/>
            <div class="listname" style="font-size:2.3vw; font-weight:600;">
                Reward
            </div>
            <img src="http://127.0.0.1:8000/img/no_image.jpg"/>
        </div>
        <div class="noticelist">
            <div class="grid-item">
                <div class="noticelistheader justify_content">
                    <b style="color:black; font-size:1.3vw; padding:0.7vw;border-bottom: 2px solid #3f437e;">What's New</b>
                    <b style="font-size:1.1vw; color:grey;">+더보기</b>
                </div>
                <div style="height:25vh; margin:1vw;">
                    <img src="http://127.0.0.1:8000/img/no_image.jpg" style=" width: 18vw;height:23vh;float: left;">
                    <p style="padding:0 1vw; float: left; text-align: left;">
                        <b style="font-size:1.2vw; color:black; font-weight:700;">
                            흑연 금형가공기술 최강자
                        </b><br/><br/>

                    </p>
                </div>
            </div>
            <div class="grid-item">
                <div class="noticelistheader justify_content">
                    <b style="color:black; font-size:1.3vw; padding:0.7vw;border-bottom: 2px solid #3f437e;">공지사항</b>
                    <b style="font-size:1.1vw; color:grey;">+ 더보기</b>
                </div>
                <div style="height:25vh;">
                    <p style="padding:0 1vw; float: left; text-align: left;">
                        {{--foreach<div class=justify_content><div></div><div></div></div> 쓸 거.--}}

                    </p>
                </div>
            </div>
        </div>
@endsection