{{-- layouts/mypage.blade.phpを読み込む --}}
@extends('layouts.mypage')


{{-- mypage.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '新規投稿')

{{-- mypage.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


<!--<div class="container">-->
<!--    <div class="header-title-area">-->
<!--        <h1 class="logo">TABI LOG</h1>-->
<!--        <div class = "header-navigation">  -->
<!--           // <nav class="navbar navbar-expand-lg navbar-light bg-light">-->
<!--            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--                <nav class="navbar navbar-expand-lg navbar-light bg-light">-->
<!--                <a class="navbar-brand" href="#!">TOP ＞</a>-->

<!--                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">-->
<!--                    <ul class="navbar-nav mr-auto mt-2 mt-md-0">-->
<!--                        <li class="nav-item active">-->
<!--                            <a class="nav-link" href="#!">マイページ ＞<span class="sr-only">(current)</span></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">-->
<!--                    <ul class="navbar-nav mr-auto mt-2 mt-md-0">-->
<!--                        <li class="nav-item active">-->
<!--                            <a class="nav-link" href="#!">記事投稿<span class="sr-only">(current)</span></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </nav>-->
<!--        </div> -->
<!--    </div>-->
<!--</div>-->


<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>新規投稿</h1>
                <form action="{{ action('Mypage\LogController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">旅行先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="place" value="{{ old('place') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">旅行のテーマ</label>
                        <div class="col-md-10">
                            <select class="form-control" name="category" value="{{ old('category') }}">
                                <option>ひとり旅</option>
                        　　　　<option>ふたり旅（夫婦・パートナーと一緒に）</option>
                                <option>家族旅（子供と一緒に）</option>
                                <option>グループ旅（友人と一緒に）</option>
                            </select>
                        </div>
        　　　     　　</div>
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
 </div>    
        
@endsection
