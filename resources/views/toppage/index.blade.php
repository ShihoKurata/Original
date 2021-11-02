@extends('layouts.front')

@section('title', 'TABILOG')

@section('content')

  <div class="main">
    <div class="container ml-5 pl-5">
      <h2 class="border-bottom pb-3 mb-3">新着記事</h2>
      @foreach($posts as $post)
        <div class="new-article">
          <div class="row">
            <div class="col-md-4">
              @if ($post->image_path)
                <img src="{{ $post->image_path }}">
              @endif
            </div>
            <div class="text col-md-8 mt-2">
              <div class="title font-weight-bold">
                <a href="{{route('show', ['id' => $post->id] )}}">
                  {{ str_limit($post->title, 70) }}
                </a>
              </div>
              <div class="body mt-2 mb-2 mr-4">
                {{ str_limit($post->body, 300) }}
              </div>
              <div class="row justify-content-between">
                <div class="date col-md-3">
                  {{ $post->updated_at->format('Y年m月d日') }}
                </div>
                <div class="category col-md-6">
                  {{ $post->category }}
                </div>
              </div>
              <div class="row">
                <div class="place col-md-9">
                  {{ $post->place }}
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection