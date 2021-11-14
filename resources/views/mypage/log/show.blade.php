@extends('layouts.mypage')

@section('title', '登録済みニュースの詳細画面')

@section('content')

    <div class="main">
        <div class="container">
            <div class="row">
                <h1>LOG詳細</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ action('Mypage\LogController@show') }}" method="get">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="mypage-log col-md-11 mx-auto">
                    <div class="row">
                       
                        <tbody>
                            <p>{{ $log->body }}</p>
                            <p><a href={{ route('mypage.log.index') }}>一覧に戻る</p>
                        </tbody>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection