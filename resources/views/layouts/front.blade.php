<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div class="top-image">
            <div class="carousel slide" data-ride="carousel" data-interval="6000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="/image/flower-field-250016_640.jpg" alt="" width="1024" height="768">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="image/polynesia-3021072_640.jpg" alt="" width="1024" height="768">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="image/grand-canyon-4273792_640.jpg" alt="" width="1024" height="768">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="image/wolf-647528_640.jpg" alt="" width="1024" height="768">
                    </div>
                    
                </div>
            </div>
        </div>
    
        <header>
            <div class="logo">
                <a href="#">
                    <img src="image/tabilog-logo.png" alt="">
                </a>
            </div>
      　     <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                @guest
                    <li><a href="#" class="btn-1">signup</a></li>
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('login') }}<</a></li>
           
                {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                    @else
                        <li><a href="#" class="btn-2">新規投稿</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                       
                            <div class ="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('logout') }}
                                </a>
                           
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest     
                    
            </ul>
      　</header>
      　


        <main class="py-4">
             <!--    {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}-->
            @yield('content')
        </main>
            
    </body>


    <!--<body>-->
    <!--    <div id="app">-->
    <!--        {{-- 画面上部に表示するナビゲーションバーです。 --}}-->
    <!--        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">-->
    <!--            <div class="container">-->
    <!--                <a class="navbar-brand" href="{{ url('/') }}">-->
    <!--                    {{ config('app.name', 'Laravel') }}-->
    <!--                </a>-->
    <!--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--                    <span class="navbar-toggler-icon"></span>-->
    <!--                </button>-->

    <!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                        <!-- Left Side Of Navbar -->
    <!--                    <ul class="navbar-nav mr-auto">-->

    <!--                    </ul>-->

                        <!-- Right Side Of Navbar -->
    <!--                    <ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
    <!--                    {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}-->
    <!--                    @guest-->
    <!--                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('login') }}<</a></li>-->
    <!--                    {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}-->
    <!--                    @else-->
    <!--                       <li class="nav-item dropdown">-->
    <!--                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"-->
    <!--                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
    <!--                            {{ Auth::user()->name }} <span class="caret"></span>-->
    <!--                           </a>-->
                               
    <!--                           <div class ="dropdown-menu" aria-labelledby="navbarDropdown">-->
    <!--                               <a class="dropdown-item" href="{{ route('logout') }}"-->
    <!--                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">-->
    <!--                                   {{ __('logout') }}-->
    <!--                               </a>-->
                                   
    <!--                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
    <!--                                   @csrf-->
    <!--                               </form>-->
    <!--                           </div>-->
    <!--                       </li>-->
    <!--                        @endguest     -->
                            
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </nav>-->
    <!--        {{-- ここまでナビゲーションバー --}}-->
            <!--<div class="top-wrapper">-->
            <!--<div class="container">-->
            <!--    <div class="header-title-area">-->
            <!--        <img class="logo" src="/image/tabilog-logo.phg" width="35px" height="50px" alt="">-->
            <!--        <h1 class="logo">TABI LOG</h1>-->
            <!--        <p class="text-sub"><サブタイトル＞</p>-->
            <!--        <div class="btn-wrapper">-->
            <!--            <button type="button" class="btn btn-primary"><a href="#" class="btn signup">新規登録</a></button>       -->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>    -->
    <!--        <div class="carousel slide" data-ride="carousel" data-interval="6000">-->
    <!--            <div class="carousel-inner">-->
    <!--                <div class="opacity-50">-->
    <!--                    <div class="carousel-item active">-->
    <!--                         <img class="img-fluid" src="/image/flower-field-250016_640.jpg" width="1400px" height="700px" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="carousel-item">-->
    <!--                        <img class="img-fluid" src="image/polynesia-3021072_640.jpg" width="100%" height="700px" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="carousel-item">-->
    <!--                        <img class="img-fluid" src="image/grand-canyon-4273792_640.jpg" width="1400px" height="700px" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="carousel-item">-->
    <!--                        <img class="img-fluid" src="image/wolf-647528_640.jpg" width="1400px" height="700px" alt="">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    
            <!--<main class="py-4">-->
            <!--    {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}-->
            <!--    @yield('content')-->
            <!--</main>-->
        </div>
    </body>
</html>
