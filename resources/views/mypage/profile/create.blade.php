@extends('layouts.mypage')
@section('title', 'プロフィール作成')
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
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h1 class="ml-3 mb-3">プロフィール作成</h1>
            <div class="archive">
              <form action="{{ action('Mypage\ProfileController@create') }}" method="post" enctype="multipart/form-data">
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
                  <input type="submit" class="btn-lg btn-primary" value="登録">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

