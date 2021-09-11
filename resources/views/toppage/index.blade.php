@extends('layouts.front')

@section('title', 'TABILOG')

@section('content')


<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    </head>
    <body>
        <header>
            
        </header>
        
        <div class = "top-wrapper">
            <img src="/image/flower-field-250016_640.jpg" width="100%" height="100%" class=="trip-image">
        
            <div class="container">
                <div class="header-title-area">
                    <h1 class="logo">TABI LOG</h1>
                    <p class="text-sub">旅の記録を残そう</p>
                    <div class="btn-wrapper">
                        <button type="button" class="btn btn-primary"><a href="#" class="btn signup">新規登録</a></button>       
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="main">
            <div class="container">
                <div class="contents">
                    <h3 class="section-title">おすすめスポット</h3>
                </div>
                <div class="card-contents">
                    <div class="recomend-contents">
                        <div class="card-body">
                            <div class="trip-image">
                               
                               <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>
                                <h6 class="card-subtitle mb-2 text-muted">日付</h6>
                                <p class="card-text">
                                    ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。
                                </p>
                                <a href="#" class="trip-theme">カテゴリー</a>
                            </div>
                        </div>
                    </div>
                    <div class="recomend-contents">
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>
                            <h6 class="card-subtitle mb-2 text-muted">日付</h6>
                            <p class="card-text">
                                ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。
                            </p>
                            <a href="#" class="trip-theme">カテゴリー</a>
                        </div>
                    </div>
                    <div class="recomend-contents">
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>
                            <h6 class="card-subtitle mb-2 text-muted">日付</h6>
                            <p class="card-text">
                                ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。
                            </p>
                            <a href="#" class="trip-theme">カテゴリー</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

   
@endsection

