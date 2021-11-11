@extends('layouts.front')

@section('title', 'TABILOG')

@section('content')

  <div class="main">
    <div class="container ml-5 pl-5">
       <h3 class="border-bottom pb-3 mb-3">{{$log->title}}</h3>
      <div class="article-show">
        <div class="row">
          <div class="col-md-4">
            @if ($log->image_path)
              <img src="{{ $log->image_path }}">
            @endif
          </div>
          <div class="text col-md-8 mt-2 mb-2">
            <div class="place mt-2 mb-2 mr-4">
            <h5>旅行先：{{ $log->place }}</h5>
            </div>
            <div class="category mt-2 mb-2 mr-4">
              <h5>旅のテーマ：{{$log->category}}</h5>
            </div>
            <div class="body mt-2 mb-2 mr-4">
              <h5>本文：{{$log->body}}</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <a href="{{ url('/') }}"class="btn_06-2"><span>TOPへ戻る</span></a>
      </div>
    </div>
  </div>
@endsection
        