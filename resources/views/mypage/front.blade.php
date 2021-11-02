@extends('layouts.mypage')

@section('title', 'MYPAGE')

@section('content')
    
  <div class="main">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card-contents">
            <button type="button" class="btn btn-primary">投稿する</button>       
            <table class="table">
              <thead>
                <tr class="table-primary">
                  <th>プロフィール詳細</th>
                  <th>＞</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><a href="#">投稿リスト</a></th>
                  <td>＞</td>
                </tr>
                <tr>
                  <th><a href="#">お気に入りリスト</a></th>
                  <td>＞</td>
                </tr>
              </tbody>
            </table>
          </div> 
        </div>
        <div class="col-9">
          <div class="card-contents">
            <div class="profile-contents">
              <img src="image/polynesia-3021072_640" class="trip-image">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>ユーザー名</th>
                    <th>Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>性別</th>
                    <th>gender</th>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-primary">プロフィールを編集する</button>   
            </div> 
          </div> 
        </div> 
      </div>
    </div>
  </div>
    
@endsection

