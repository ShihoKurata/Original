@extends('layouts.front')

@section('title', 'TABILOG')

@section('content')

<div class="main">
  <div class="container">
    <div class="article-show">
      <div class="row">
        @if ($log->image_path)
          <img src="{{ $log->image_path }}">
        @endif
      </div>
      <div class="row">
        <div class="place col-md-9">
          <h1>旅行先：{{ $log->place }}</h1>
        </div>
      </div>
      <div class="row">
        <div class="text col-md-8">
          <h1>旅のテーマ：{{$log->category}}</h1>
        </div>
        <div class="text col-md-8">
          <h1>タイトル：{{$log->title}}</h1>
        </div>
        <div class="body mt-2 mb-2">
          <h1>本文：{{$log->body}}</h1>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection




