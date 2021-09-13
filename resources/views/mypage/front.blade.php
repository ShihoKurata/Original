@extends('layouts.front')

@section('title', 'MYPAGE')

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
                        </nav>
                    </div> 
                </div>
            </div>
        </header>
    
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card-contents">
                            <button type="button" class="btn btn-primary">投稿する</button>       
                            <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th>プロフィール詳細</th>
                                    <th>＞</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><a href="#">投稿リスト</a></th>
                                    <td>＞</td>
                                </tr>
                                <tr>
                                    <th><a href="#">お気に入りリスト</a></th>
                                    <td>＞</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
                <div class="col-9">
                    <div class="card-contents">
                        <div class="profile-contents">
                            <img src="image/polynesia-3021072_640" class="trip-image">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>ユーザー名</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>性別</th>
                                        <th>gender</th>
                                    </tr>
                                    <tr>
                                        <th>年齢</th>
                                        <th>age</th>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary">プロフィールを編集する</button>   
                        </div> 
                    </div> 
                </div> 
            </div>
        </div>
    </body>
    
@endsection

