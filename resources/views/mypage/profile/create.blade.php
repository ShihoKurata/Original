{{-- layouts/mypage.blade.phpを読み込む --}}
@extends('layouts.mypage')


{{-- mypage.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール作成')

{{-- mypage.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>プロフィール作成</h1>
            </div>
        </div>
    </div>
@endsection
