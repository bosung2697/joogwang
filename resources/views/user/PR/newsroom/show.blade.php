@extends('layouts.app')
@section('content')
    <style>
        .ceoheader {
            margin: 3vh 0;
        }

        .ceoheader .header {
            padding-bottom: 5vh;
        }

        .ceoheader > div {
            color: #808080;
            font-size: 1.1vw;
            text-align: right;
            font-weight: 600;
        }

        .pagecontents {
            margin: 1vw;
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

        .titletable {
            margin: auto;
            font-size: 1.2vw;
            padding-bottom: 2vh;
        }

        .titletable > table > tbody > tr > td {
            padding: 1vw;
        }

        .newsroom_detailed_table_content {
            width: 80%;
            padding: 3vw;
            margin:auto;
        }
    </style>
    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/newsroom')}}">PR</a>><a
                        href="{{url('/newsroom')}}">뉴스룸</a></div>
            <hr width="3.6%;" align="left" ; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">뉴스룸</div>
        </div>
        <div class="pagecontents">
            <div class="titletable">
                <table width="100%"
                       style="margin:auto; padding:1vw; border-top:0.5px solid lightgrey; border-bottom:0.5px solid lightgrey;">
                    <tr>
                        <td style="width:7%; text-align: center; background-color: #dde3f1">제목</td>
                        <td style="width:93%; padding-left:3vw;text-align: left; background-color:#edf0f7;">{{$data->title}}</td>
                    </tr>
                </table>
            </div>
            <div style="text-align:right; margin:0; padding:0;">
                <div>작성자 | 관리자</div>
                <div>작성일 | {{$data->created_at}}</div>
                @if($data->updated_at!=null)
                    <div>수정일 | {{$data->updated_at}}</div>
                @endif
            </div>
            <div>
                <table class="newsroom_detailed_table_content">
                    <tr>
                        <td>
                            <div>
                                <p style="padding:3vh 1vw; font-size:1vw;">{{$data->content}}</p>
                            </div>
                        </td>
                    </tr>
                    @if($data->fileimage !=null)
                        <tr>
                            <td>
                                <img style="width:100%;" src="/{{$data->fileimage}}">
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td>
                            <div class="table_footer" style="padding:4vh 0; border-top:0.1px solid">
                            <span><a href="{{url('/newsroom/'.$previous)}}">이전글</a> <a
                                        href="{{url('/newsroom/'.$next)}}">다음글</a>
                            </span>
                                <span><a href="{{url('/newsroom')}}">목록</a></span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
