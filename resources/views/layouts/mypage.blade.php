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
    <link href="{{ secure_asset('css/mypage.css') }}" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="header-image">
        <!--<img src="image/mypage-header.png" alt="">-->
      </div>
      <div class="logo">
        <a href="#">
          <img src="{{ secure_asset('image/tabilog-logo.png') }}" alt="">
        </a>
      </div>
      <nav class="pc-nav">
        <ul>
          <li><a href="#">TOP</a></li>
          <li><a href="#">マイページ</a></li>
  　     </ul>
　    </nav>
             
　     <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
        @guest
          <li><a class="nav-link" href="{{ route('login') }}">{{ __('login') }}<</a></li>
        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
        @else
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
          <li><a href="#" class="btn-2">LOG作成</a></li>
        @endguest     
      </ul>
  　</header>
    <main class="py-4">
      {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
      @yield('content')
    </main>
  </body>
</html>
