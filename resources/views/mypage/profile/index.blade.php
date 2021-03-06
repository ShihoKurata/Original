@extends('layouts.mypage')

@section('title', '登録濟みプロフィールの一覧')

@section('content')

  <div class="container">
    <div class="wrapper">
      <div class="row">
        <h2>プロフィール一覧</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="{{ action('Mypage\ProfileController@add') }}" role="bottun" class="btn btn-primary">新規作成</a>
        </div>
        <div class="col-md-8">
          <form action="{{ action('Mypage\ProfileController@index') }}" method="get">
            <div class="form-group row">
              <label class="col-md-2">氏名</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="cond_title" value={{ $cond_title }}>
              </div>
              <div class="col-md-2">
                {{ csrf_field() }}
                <input type="submit" class="btm btn-primary" value="検索">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="mypage-profile col-md-12 mx-auto">
          <div class="row">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th width="10%">ID</th>
                  <th width="15%">氏名</th>
                  <th width="10%">性別</th>
                  <th width="15%">趣味</th>
                  <th width="50%">自己紹介欄</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $profile)
                  <tr>
                    <th>{{ $profile->id }}</th>
                    <td>{{ str_limit($profile->name,20) }}</td>
                    @if($profile->gender == 'male')
                      <td>男性</td>
                    @else
                      <td>女性</td>
                    @endif
                    <td>{{ str_limit($profile->hobby,50) }}</td>
                    <td>{{ str_limit($profile->introduction,70) }}</td>
                    <td>
                      <div>
                        <a href="{{ action('Mypage\ProfileController@edit', ['id' => $profile->id]) }}">編集</a>
                      </div>
                      <div>
                        <a href="{{ action('Mypage\ProfileController@delete', ['id' => $profile->id]) }}">削除</a>
                      </div>
                    </td>
                  </tr>    
                @endforeach         
              </tbody>
            </table>    
          </div>    
        </div>
      </div>
    </div>
  </div>
@endsection