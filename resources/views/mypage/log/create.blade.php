@extends('layouts.mypage')

@section('title', '新規投稿')

@section('content')

  <div class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h1 class="ml-3 mb-3">LOG投稿</h1>
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
              <label class="col-md-2">旅行のテーマ</label>
              <div class="col-md-10">
                <select class="form-control" name="category" value="{{ old('category') }}">
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
            <input type="submit" class="btn btn-primary" value="投稿する">
          </form>
        </div>
      </div>
    </div>
  </div>    
        
@endsection
