@extends('layouts.front')

@section('title', 'TABILOG')

@section('content')

  <div class="main">
    <div class="container col-md-9 mx-auto">
      <h3 class="border-bottom pb-3">{{$log->title}}</h3>
      <div class="article-show">
        <div class="row">
          <div class="col-md-4">
            @if ($log->image_path)
              <img src="{{ $log->image_path }}">
            @endif
          </div>
          <div class="text col-md-8 mt-2 mb-2">
            <div class="place my-3 mr-4">
            <h5 class="show">日付：{{ $log->updated_at->format('Y年m月d日') }}</h5>
            </div>
            <div class="place my-3 mr-4">
            <h5 class="show">旅行先：{{ $log->place }}</h5>
            </div>
            <div class="category my-3 mr-4">
              <h5 class="show">旅のテーマ：{{$log->category}}</h5>
            </div>
          </div>
          <div class="main-body">
              <h5 class="show">本文：{{$log->body}}</h5>
            </div>
        </div>
      </div>
      <a href="{{ url('/') }}"class="btn_06-2"><span>TOPへ戻る</span></a>
    </div>
  </div>
@endsection
        