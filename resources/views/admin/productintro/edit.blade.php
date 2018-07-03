@extends('auth.admin.admin')
@section('content')
    <style>
        #productintro td {
            padding: 15px;
            padding-right: 20px;
        }

        #productintro input {
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
    <div id="productintro" class="infoput">
        <div class="container" style="margin: 0 5%;">
            <h1 class="infoputheader"><strong>※ 제품소개 수정</strong></h1>
            <form id="productintro-form" method="POST" action="{{ route('admin.productintro.update', $data->id) }}"
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
                            <td class="datainput"><label for="content">제품소개 내용</label></td>
                            <td>
                                <textarea id="content" class="form-control" name="content" cols="70" placeholder="제품소개 내용을 입력해주세요.">{{ old('content',$data->content)}}</textarea>
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
                                <button type="submit" form="productintro-form" class="btn btn-success">
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