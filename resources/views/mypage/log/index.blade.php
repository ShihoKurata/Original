@extends('layouts.mypage')
@section('title', '登録済みニュースの一覧')
@section('content')
    <div class="main">
        <div class="container">
            <div class="row">
                <h1>LOG一覧</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ action('Mypage\LogController@index') }}" method="get">
                        <div class="form-group row">
                            <label class="search col-md-2 offset-md-2">★旅行先で検索する★</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                            </div>
                            <div class="col-md-2">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" value="検索">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="mypage-log col-md-11 mx-auto">
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <!--<th width="5%">ID</th>-->
                                    <th width="15%">旅行先</th>
                                    <th width="20%">タイトル</th>
                                    <th width="58%">本文</th>
                                    <th width="7%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $log)
                                    <tr>
                                        <!--<th>{{ $log->id }}</th>-->
                                        <td>{{ \Str::limit($log->place, 50) }}</td>
                                        <td>{{ \Str::limit($log->title, 100) }}</td>
                                        <td>{{ \Str::limit($log->body, 250) }}</td>
                                        <td>
                                            <div>
                                                <a href="{{ action('Mypage\LogController@edit', ['id' => $log->id]) }}">編集</a>
                                            </div>
                                            <div>
                                                <a href="{{ action('Mypage\LogController@delete', ['id' => $log->id]) }}">削除</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection