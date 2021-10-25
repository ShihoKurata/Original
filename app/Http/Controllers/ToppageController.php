<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\HTML;

// 追記
use App\Log;

class ToppageController extends Controller
{
    public function index(Request $request)
    {
        $posts = Log::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // log/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('toppage.index', ['headline' => $headline, 'posts' => $posts]);
    }
  
    
    public function show($id)
    {
        $log = Log::find($id);
        return view('toppage.show',['log'=>$log]);
    }
    
    
}
