@extends('layouts.mypage')

@section('title', 'プロフィール編集')

@section('content')

  <div class="wrapper">
    <section class="side">
      <h2>MENU</h2>　
      <div class="row my-3 mx-3">
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
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h1 class="ml-3 mb-3">プロフィール編集</h1>
            <div class="archive">
              <form action="{{ action('Mypage\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                  <ul>
                    @foreach($errors->all() as $e)
                      <li>{{ $e }}</li>
                    @endforeach
                  </ul>
                @endif
                <div class="form-group row">
                  <label class="col-md-2" for="name">名前</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2" for="image">画像</label>
                  <div class="col-md-10">
                    <input type="file" class="form-contol-file" name="image">
                    <div class="form-text text-info">
                      設定中: {{ $profile_form->image_path }}
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                      </label>
                    </div>
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
                    <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2" for="introduction">自己紹介</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="introduction" rows="15">{{ $profile_form->introduction }}</textarea>
                </div>
                <div class="form-group row">
                  <div class="col-md-2 mx-auto">
                    <input type="hidden" name="id" value="{{ $profile_form->id }}">
                    {{ csrf_field() }}
                  </div>
                </div>
                {{ csrf_field() }}
                <div class="row col-md-2 mx-auto my-4">
                  <input type="submit" class="btn btn-primary" value="更新する">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

