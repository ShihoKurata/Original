{{-- layouts/mypage.blade.phpを読み込む --}}
@extends('layouts.mypage')


{{-- mypage.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール作成')

{{-- mypage.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<!DOCTYPE HTML>
<html>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <head>
    </head>
    <body>
    <header>
        <div class="container">
            <div class="header-title-area">
                <h1 class="logo">TABI LOG</h1>
                <div class = "header-navigation">  
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="#!">TOP ＞</a>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#!">マイページ ＞<span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#!">プロフィール<span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div> 
            </div>
        </div>
    </header>
    
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="text-center">プロフィール作成</h2>
                    <form action="{{ action('Mypage\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                               <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="form-group row">
                            <label class="col-md-2" for="name">ユーザー名</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="title">画像</label>
                            <div class="col-md-10">
                                <input type="file" class="form-contol-file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">性別</label>
                        　　<div class="col-md-10">
                                <label><input type="radio" class="radio" name="gender" value="male">男性</label>
                                <label><input type="radio" class="radio" name="gender" value="female">女性</label>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-md-2" for="hobby">趣味</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="introduction">自己紹介</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="introduction" rows="15">{{ old('introduction') }}</textarea>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div style="text-align: center;">
                        <input type="submit" class="btn-lg btn-primary" value="更新する">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

