@extends('auth.admin.admin')
@section('content')
    <style>
        #awards td {
            padding: 15px;
            padding-right: 20px;
        }

        #awards input {
            overflow-x: auto;
            -ms-overflow-x: auto;
            overflow-y: auto;
            -ms-overflow-y: auto;
            text-overline: ellipsis;
            width: 100%;
            height: 20px;
        }

        div {
            vertical-align: middle;
        }

        .help-block {
            color: red;
            font-size: 13px;
            text-align: left;
        }
    </style>
    <div id="awards" class="infoput">
        <div class="container" style="margin: 0 5%;">
            <h1 class="infoputheader"><strong>※ 수상실적 수정</strong></h1>
            <form id="awards-form" method="POST" action="{{ route('admin.awards.update', $data->id) }}"
                  enctype="multipart/form-data">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row">
                    <table>
                        <tr>
                            <td class="datainput"><label for="title">제목</label></td>
                            <td>
                                <input type="text" id="title" name="title" class="form-control"
                                       placeholder="제목을 입력해주세요." size="68" value="{{old('title', $data->title)}}">
                                @if ($errors->has('title'))
                                    <div class="help-block">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="awarded_date">수상실적 내용</label></td>
                            <td>
                                <input type="date" id="awarded_date" class="form-control" name="awarded_date" value="{{ old('awarded_date',$data->awarded_date)}}"/>
                                @if ($errors->has('awarded_date'))
                                    <div class="help-block">
                                        {{ $errors->first('awarded_date') }}
                                    </div>
                                    @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="fileimage">파일 첨부</label></td>
                            <td>
                                <input type="file" id="fileimage" name="fileimage" class="image"
                                       value="{{ old('fileimage',$data->fileimage) }}">
                                @if ($errors->has('fileimage'))
                                    <div class="help-block">
                                        {{ $errors->first('fileimage') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="savebutton" colspan="2">
                                <button type="submit" form="awards-form" class="btn btn-success">
                                    저장하기
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection