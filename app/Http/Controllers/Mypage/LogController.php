<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Log;
use App\History;
use Carbon\Carbon;

class LogController extends Controller
{
    public function add()
    {
        return view('mypage.log.create');
    }
    
    public function create(Request $request)
    {
        // Validationを行う
        $this->validate($request, Log::$rules);
        $log = new Log;
        $form = $request->all();
        
        // formに画像があれば、保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $log->image_path = basename($path);
        } else {
            $log->image_path = null;
        }
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);
        
        // データベースに保存する
        $log->fill($form);
        $log->save();
        
        return redirect('mypage');
    }

    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Log::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Log::all();
      }
      return view('mypage.log.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function edit(Request $request)
    {
          // Log Modelからデータを取得する
        $log = Log::find($request->id);
        if (empty($log)) {
            abort(404);    
        }
        return view('mypage.log.edit', ['log_form' => $log]);
    }


    public function update(Request $request)
    {
          // Validationをかける
        $this->validate($request, Log::$rules);
        // Log Modelからデータを取得する
        $log = Log::find($request->id);
        // 送信されてきたフォームデータを格納する
        $log_form = $request->all();
        
        if ($request->remove == 'true') {
          $log_form['image_path'] = null;
        } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $log_form['image_path'] = basename($path);
        } else {
          $log_form['image_path'] = $log->image_path;
        }
        
        unset($log_form['image']);
        unset($log_form['remove']);
        unset($log_form['_token']);
        // 該当するデータを上書きして保存する
        $log->fill($log_form)->save();
        
        $history = new History();
        $history->log_id = $log->id;
        $history->edited_at = Carbon::now();
        $history->save();
        
        
        return redirect('mypage');
    }
    
    public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $log = Log::find($request->id);
      // 削除する
      $log->delete();
      return redirect('mypage/log/index');
  }  



     public function show()
    {
        return view('mypage.log.show');
    }
}
