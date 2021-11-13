<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Log;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $posts = Log::all()->sortByDesc('updated_at');
            
        return view('mypage.front', ['posts' => $posts]);
    }
}
