@extends('layouts.admin')
@section('content')
    <div id='newsroom' class="infoput">
        <div class="container">
            <h1 class="infoputheader"><strong>※ 공지사항</strong></h1>
            <form id="newsroom-form" method="POST" action="{{route('admin.newsroom.store')}}" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <div class="row">
                    <table>
                        <tr>
                        <td class="datainput"><label for="title">제목</label></td>
                        <td>
                            <input type="text" id="title" name="title" class="form-control"
                                   placeholder="제목을 입력해주세요." size="68" value="{{old('title')}}">
                            @if ($errors->has('title'))
                                <div class="help-block">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="content">공지 내용</label></td>
                            <td>
                                <textarea id="content" class="form-control" name="content" cols="70" placeholder="공지 내용을 입력해주세요.">{{ old('content')}}</textarea>
                                @if ($errors->has('content'))
                                    <div class="help-block">
                                        {{ $errors->first('content') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="fileimage">파일 첨부</label></td>
                            <td>
                                <input type="file" id="fileimage" name="fileimage" class="image"
                                       value="{{ old('fileimage') }}">
                                @if ($errors->has('fileimage'))
                                    <div class="help-block">
                                        {{ $errors->first('fileimage') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="savebutton" colspan="2">
                                <button type="submit" class="btn btn-success">저장하기
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection