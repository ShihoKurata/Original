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
            <div class="container">
                <div class="header-title-area">
                    <img class="logo" src="/image/tabilog-logo.phg" width="35px" height="50px" alt="">
                    <h1 class="logo">TABI LOG</h1>
                    <p class="text-sub"><サブタイトル＞</p>
                    <div class="btn-wrapper">
                        <button type="button" class="btn btn-primary"><a href="#" class="btn signup">新規登録</a></button>       
                    </div>
                </div>
                <div class="carousel slide" data-ride="carousel" data-interval="6000">
                    <div class="carousel-inner">
                         <div class="opacity-50">
                            <div class="carousel-item active">
                                 <img class="img-fluid" src="/image/flower-field-250016_640.jpg" width="1400px" height="700px" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="image/polynesia-3021072_640.jpg" width="100%" height="700px" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="image/grand-canyon-4273792_640.jpg" width="1400px" height="700px" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="image/wolf-647528_640.jpg" width="1400px" height="700px" alt="">
                            </div>
                        </div>
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
                    <div class="card-body">
                        <div class = "left-column">
                            <div class="trip-image">
                                <img src = "image/polynesia-3021072_640.jpg" width="300px" height="200px">
                            </div>
                        </div>
                        <div class = "right-column">
                            <div class="trip-article">
                                <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>
                                <h5 class="card-subtitle mb-2 text-muted">日付</h5>
                                <p class="card-text">
                                    ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。
                                </p>
                                <a href="#" class="trip-theme">カテゴリー</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class = "left-column">
                            <div class="trip-image">
                               <img src = "image/flower-field-250016_640.jpg" width="300px" height="200px">
                            </div>
                        </div>
                        <div class = "right-column">
                            <div class="trip-article">
                                <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>
                                <h6 class="card-subtitle mb-2 text-muted">日付</h6>
                                <p class="card-text">
                                    ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。
                                </p>
                                <a href="#" class="trip-theme">カテゴリー</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class = "left-column">
                            <div class="trip-image">
                                <img src = "image/polynesia-3021072_640.jpg" width="300px" height="200px">
                            </div>
                        </div>
                        <div class = "right-column">
                            <div class="trip-article">
                                <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>
                                <h5 class="card-subtitle mb-2 text-muted">日付</h5>
                                <p class="card-text">
                                    ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。
                                </p>
                                <a href="#" class="trip-theme">カテゴリー</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

   
@endsection

