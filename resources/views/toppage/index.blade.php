@extends('layouts.front')

@section('title', 'TABILOG')

@section('content')

    <div class="main">
        <div class="container">
            <hr color="#c0c0c0">
            @if (!is_null($headline))
                <div class="row">
                    <div class="headline col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="caption mx-auto">
                                    <div class="image">
                                        @if ($headline->image_path)
                                            <img src="{{ $headline->image_path }}">
                                        @endif
                                    </div>
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->title, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <hr color="#c0c0c0">
                <div class="row">
                    <div class="posts col-md-8 mx-auto mt-3">
                        @foreach($posts as $post)
                            <div class="post">
                                <div class="row">
                                    <div class="text col-md-6">
                                        <div class="date">
                                            {{ $post->updated_at->format('Y年m月d日') }}
                                        </div>
                                        <div class="title">
                                            {{ str_limit($post->title, 150) }}
                                        </div>
                                        <div class="body mt-3">
                                            {{ str_limit($post->body, 1500) }}
                                        </div>
                                    </div>
                                    <div class="image col-md-6 text-right mt-4">
                                        @if ($post->image_path)
                                            <img src="{{ $post->image_path }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr color="#c0c0c0">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection

    <!--    <div class="main">-->
    <!--        <div class="container">-->
    <!--            <div class="contents">-->
    <!--                <h3 class="section-title">新着記事</h3>-->
    <!--            </div>-->
    <!--            <div class="card-contents">-->
    <!--                <div class="card-body">-->
    <!--                    <div class = "left-column">-->
    <!--                        <div class="trip-image">-->
    <!--                            <img src = "image/polynesia-3021072_640.jpg" width="300px" height="200px">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class = "right-column">-->
    <!--                        <div class="trip-article">-->
    <!--                            <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>-->
    <!--                            <h5 class="card-subtitle mb-2 text-muted">日付</h5>-->
    <!--                            <p class="card-text">-->
    <!--                                ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。-->
    <!--                            </p>-->
    <!--                            <a href="#" class="trip-theme">カテゴリー</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="card-body">-->
    <!--                    <div class = "left-column">-->
    <!--                        <div class="trip-image">-->
    <!--                           <img src = "image/flower-field-250016_640.jpg" width="300px" height="200px">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class = "right-column">-->
    <!--                        <div class="trip-article">-->
    <!--                            <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>-->
    <!--                            <h6 class="card-subtitle mb-2 text-muted">日付</h6>-->
    <!--                            <p class="card-text">-->
    <!--                                ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。-->
    <!--                            </p>-->
    <!--                            <a href="#" class="trip-theme">カテゴリー</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="card-body">-->
    <!--                    <div class = "left-column">-->
    <!--                        <div class="trip-image">-->
    <!--                            <img src = "image/polynesia-3021072_640.jpg" width="300px" height="200px">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class = "right-column">-->
    <!--                        <div class="trip-article">-->
    <!--                            <h4 class="card-title"><a href="#!" class="card-link">タイトル</a></h4>-->
    <!--                            <h5 class="card-subtitle mb-2 text-muted">日付</h5>-->
    <!--                            <p class="card-text">-->
    <!--                                ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。ここに記事が入ります。-->
    <!--                            </p>-->
    <!--                            <a href="#" class="trip-theme">カテゴリー</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</body>-->

   


