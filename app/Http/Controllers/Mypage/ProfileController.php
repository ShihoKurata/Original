<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileHistory;
use Carbon\Carbon;
use Auth;


class ProfileController extends Controller
{
  public function add()
  {
    return view('mypage.profile.create');
  }

  public function create(Request $request)
  {
    $this->validate($request, Profile::$rules);
    $profile = new Profile();
    $form = $request->all();
      // formに画像があれば、保存する
    if (isset($form['image'])) {
      $path = $request->file('image')->store('public/image');
      $news->image_path = basename($path);
    } else {
    $profile->image_path = null;
    }

    unset($form['_token']);
    unset($form['image']);
      // データベースに保存する
    $profile->fill($form);
    $profile->user_id = Auth::id();
    $profile->save();

    return redirect('mypage/profile/create');
  }

  public function index(Request $request)
  {
    $cond_title = $request->cond_title;
      if ($cond_title != '') {
      // 検索されたら検索結果を取得する
        $posts = Profile::where('name', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
        $posts = Profile::all();
      }
      return view('mypage.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  public function edit(Request $request)
  {
      // Profile Modelからデータを取得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('mypage.profile.edit', ['profile_form' => $profile]);
  }


  public function update(Request $request)
  {
        $this->validate($request, Profile::$rules);
        $profile = Profile::find($request->id);
        $profile_form = $request->all();
        
        unset($profile_form['_token']);
        
        $profile->fill($profile_form)->save();
        
        $profile_history = new ProfileHistory;
        $profile_history->profile_id = $profile->id;
        $profile_history->edited_at = Carbon::now();
        $profile_history->save();
        
        return redirect('/mypage');
  }
         
  public function delete(Request $request)
  {
    // 該当するProfile Modelを取得
    $profile = Profile::find($request->id);
    // 削除する
    $profile->delete();
    return redirect('/mypage');
  }  
}