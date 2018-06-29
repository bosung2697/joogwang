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

        .pagecontents{
            font-size:1vw;
            color:black;
            border-collapse: collapse;
            border-bottom: 1px solid;
            width:80%;
            margin:auto;
        }
        .pagecontents th, .pagecontents td{
            padding:0.5vw;
        }
        .pagecontents th{
            text-align:center;
        }
        .table_title{
            background-color: #eef1f8;
            border: 1px solid;
            width:80%;
        }
        .table_id{
            width:7%;
        }
        .table_date{
            width:13%;
        }
        .tothedetailpage{
            background-color:white;
            font-size:1vw;
            color:black;
        }
    </style>

    <div class="container">
        <div class="ceoheader">
            <div><a href={{url('/')}}>Home</a>><a href="{{url('/newsroom')}}">PR</a>><a
                        href="{{url('/newsroom')}}">뉴스룸</a></div>
            <hr width="5%;" align="left"; style="border:thin solid #667ebc; margin-bottom: 0;">
            <div class="header">뉴스룸</div>
        </div>
        <div>
            <table class="pagecontents">
                <thead>
                <tr style="border-top: 1px solid; border-bottom: 1px solid;">
                    <th class="table_id">번호</th>
                    <th class="table_title">제목</th>
                    <th class="table_date">날짜</th>
                </tr>
                </thead>
                @forelse($data as $value)
                    <tr class="tothedetailpage" onclick="show({{$value->id}})">
                        <td class="td1">{{$value->id}}</td>
                        <td class="td1" style="border-left:1px solid; border-right:1px solid;">{{$value->title}}</td>
                        <td class="td1">{{$value->created_at}}</td>
                    </tr>
                @empty
                    <tr>
                    <td colspan="3">등록된 공지사항이 없습니다.</td>
                    </tr>
                @endforelse
            </table>
            <div style="margin-top:10vh;">
                @if($data->count())
                    <div class="text-center" style="margin:auto;">
                        {!! $data->render() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        function show(id) {
            location.href = "/newsroom/" + id;
        }
    </script>

@endsection
