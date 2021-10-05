@extends('layouts.front')

@section('title', 'TABILOG')

@section('content')

<div class="main">
    <div class="container">
        <h2>新着記事</h2>
        <hr color="#c0c0c0">
            @foreach($posts as $post)
                <div class="new-article">
                    <div class="row">
                        <div class="col-md-3">
                            @if ($post->image_path)
                                <img src="{{ $post->image_path }}">
                            @endif
                        </div>
                        <div class="text col-md-9">
                            <div class="title">
                                {{ str_limit($post->title, 150) }}
                            </div>
                            <div class="body mt-3">
                                {{ str_limit($post->body, 1500) }}
                            </div>
                            <div class="row">
                                <div class="date col-md-3">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="place col-md-3">
                                    {{ $post->place }}
                                </div>
                                <div class="category col-md-3">
                                    {{ $post->category }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach                
    </div>
</div>
