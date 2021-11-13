@extends('layouts.mypage')
@section('title', '編集')
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
            <h1 class="mx-auto mb-3">LOG編集</h1>
            <div class="archive">
              <form action="{{ action('Mypage\LogController@edit') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                  <ul>
                    @foreach($errors->all() as $e)
                      <li>{{ $e }}</li>
                    @endforeach
                  </ul>
                @endif
                <div class="form-group row">
                  <label class="col-md-3">旅行先</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="place" value="{{ $log_form->place }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3">旅行のテーマ</label>
                  <div class="col-md-9">
                    <select class="form-control" name="category" value="{{ $log_form->category }}">
                      <option>ひとり旅</option>
                　　　　<option>ふたり旅（夫婦・パートナーと一緒に）</option>
                      <option>家族旅（子供と一緒に）</option>
                      <option>グループ旅（友人と一緒に）</option>
                    </select>
                  </div>
    　　　     　　</div>
                <div class="form-group row">
                  <label class="col-md-3">タイトル</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="title" value="{{ $log_form->title }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3">本文</label>
                  <div class="col-md-9">
                    <textarea class="form-control" name="body" rows="20">{{ $log_form->body }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2">画像</label>
                  <div class="col-md-10">
                    <input type="file" class="form-control-file" name="image">
                    <div class="form-text text-info">
                      設定中: {{ $log_form->image_path }}
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-2 mx-auto">
                    <input type="hidden" name="id" value="{{ $log_form->id }}">
                      {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                  </div>
                </div>
              </form>
            </div>
            <div class="row mt-5">
              <div class="col-md-3 mx-auto">
                <h3>編集履歴</h3>
                <ul class="list-group">
                  @if ($log_form->histories != NULL)
                    @foreach ($log_form->histories as $history)
                      <li class="list-group-item">{{ $history->edited_at }}</li>
                    @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

                           
                            
                        