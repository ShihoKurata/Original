<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
    <title>@yield('title')</title>

    <!-- Scripts -->
     {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    {{--<!-- Styles --}}
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
  </head>
  
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark navbar-laravel fixed-top">
        <div class="container pl-0">
          <div class="logo mt-2">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ secure_asset('image/tabilog-logo.png') }}" alt="ロゴ画像">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
    
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
            <!--Authentication Links -->
             {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
              @guest
                <div class="nav-item" >
                  <div class="row pt-1">             
                    <li><a href="{{ route('login') }}" class="btn_06-2"><span>> ログイン</span></a></li>
                  </div>
                  <div class="row pt-2">
                    <li><a href="{{ route('register') }}"class="btn_06-2"><span>新規登録</span></a></li>
                  </div>
                </div>
                {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
              @else
                <div class="nav-item">
                  <div class="row">
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
                      <div class ="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('ログアウト') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </div>
                    </li>
                  </div>              
                  <div class="row">
                    <li><a href="{{ route('mypage') }}"class="btn_06-2"><span>LOG作成</span></a></li>
                  </div>
                </div>
              @endguest
            </ul>             
          </div><!--collapse-->
        </div><!--container-->
      </nav>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner bgCarousel">
  	      <div class="carousel-item bgCarousel__item active"></div>
  	      <div class="carousel-item bgCarousel__item"></div>
  	      <div class="carousel-item bgCarousel__item"></div>
  	      <div class="carousel-item bgCarousel__item"></div>
        </div>
      </div>
    </header>
    
    <main class="py-4">  
      <!--    {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}-->
      @yield('content')
    </main>
  </body>
</html>