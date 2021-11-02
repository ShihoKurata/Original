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

    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    {{-- この章の後半で作成するCSSを読み込みます --}}
    <link href="{{ secure_asset('css/mypage.css') }}" rel="stylesheet">
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
                <li><a class="btn-2" href="{{ route('log.create') }}">{{ __('LOG作成') }}</a></li>
              </div>
            </div>
          </ul>             
        </div><!--container-->
      </nav>
      
      <div class="header-image">
        <!--<img src="image/mypage-header.png" alt="">-->
      </div>
    </header>
    
    <main class="py-4">  
      <!--    {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}-->
      @yield('content')
    </main>
  </body>
</html>
      
      
            