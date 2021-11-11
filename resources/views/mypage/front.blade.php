@extends('layouts.mypage')

@section('title', 'MYPAGE')

@section('content')

  <div class="wrapper">
    <section class="side">
      <h2>MENU</h2>　
      <div class="row mb-3 ml-3">
        @if(Auth::user()->profile==null)
          <li class="menu"><a href="{{ route('profile.create') }}"class="btn_06-2"><span>プロフィール作成</span></a></li>
        @else
          <li class="menu"><a href="{{ route('profile.edit', ['id' => Auth::user()->profile->id]) }}"class="btn_06-2"><span>プロフィール編集</span></a></li>
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
      <h1 class="ml-3 mb-3">LOGを投稿</h1>
      <div class="archive">
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
            <label class="col-md-2">テーマ</label>
            <div class="col-md-10">
              <select class="form-control" name="category" value="{{ old('category') }}">
                <option>旅のテーマを選択</option>
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
          <div style="text-align: center;">
            <input type="submit" class="btn btn-primary" value="投稿する">
          </div>
        </form>
      </div>  
    </section>
  </div>
@endsection

