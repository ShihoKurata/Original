@extends('layouts.mypage')

@section('title', '登録済みニュースの一覧')

@section('content')

  <div class="wrapper">
    <section class="side">
      <h2>MENU</h2>　
      <div class="row mb-3 ml-3">
        @if(Auth::user()->profile==null)
          <li class="menu"><a href="{{ route('profile.create') }}"class="btn_06-2"><span>プロフィール作成</span></a></li>
        @else
          <li class="menu"><a href="{{ route('profile.edit') }}"class="btn_06-2"><span>プロフィール編集</span></a></li>
        @endif      
      </div>
      <div class="row mb-3 ml-3">
        <li class="menu"><a href="{{ route('mypage') }}"class="btn_06-2"><span>LOG作成</span></a></li>
      </div>
      <div class="row ml-3">
        <li class="menu"><a href="{{ route('log.index') }}"class="btn_06-2"><span>LOGリスト</span></a></li>
      </div>
    </section>
    <section class="main">
      <div class="container">
        <div class="row">
          <h1 class="ml-3 mb-3">LOGリスト</h1>
        </div>
        <div class="archive">
          <div class="row">
            <div class="col-md-12">
              <form action="{{ action('Mypage\LogController@index') }}" method="get">
                {{--<div class="form-group row">--}}
                  <div class="row ml-3">
                   {{-- <label class="search col-md-2 offset-md-2">★旅行先やテーマで検索</label>--}}
                    <label class="search">★旅行先やテーマで検索</label>
                  </div>
                  <div class="row ml-5 mb-3">
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="keyword" value="{{ $keyword }}">
                    </div>
                    <div class="col-md-2">
                      {{ csrf_field() }}
                      <input type="submit" class="btn btn-primary" value="検索">
                    </div>
                  </div>
                {{--</div>--}}
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
                      <th width="50%">本文</th>
                      <th width="15%">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $log)
                      <tr>
                        {{--<!--<th>{{ $log->id }}</th>-->--}}
                        <td>{{ \Str::limit($log->place, 50) }}</td>
                        <td>{{ \Str::limit($log->title, 100) }}</td>
                        <td>{{ \Str::limit($log->body, 150) }}</td>
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
    </section>
  </div>
@endsection