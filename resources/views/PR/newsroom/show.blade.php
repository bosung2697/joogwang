@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/newsroom')}}">PR</a>><a
                        href="{{url('/newsroom')}}">뉴스룸</a></div>
            <hr width="5%;" align="left"; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">뉴스룸</div>
        </div>
        <div>
            <table>
                <tr>
                    <td style="width:10%;">제목</td>
                    <td style="width:90%;">{{$data->title}}</td>
                </tr>
            </table>
        </div>
        <div>작성자 : 관리자</div>
        <div>작성일 : {{$data->created_at}}</div>
        <div>
            <table class="newsroom_detailed_table_content">
                <tr>
                    <td>
                        <div>
                            <p>{{$data->content}}</p>
                        </div>
                    </td>
                </tr>
                @if($data->fileimage !=null)
                    <tr>
                        <td>
                            <p><img src="/{{$data->fileimage}}"></p>
                        </td>
                    </tr>
                @endif
                <tr>
                    <td>
                        <div class="table_footer">
                            <span><a href="{{url('/newsroom/'.$previous)}}">이전글</a> <a href="{{url('/newsroom/'.$next)}}">다음글</a>
                            </span><a href="{{url('/newsroom')}}">목록</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection