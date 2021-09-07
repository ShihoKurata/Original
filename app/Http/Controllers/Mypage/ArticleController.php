<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function add()
    {
        return view('mypage.article.create');
    }
    
    public function create(Request $request)
    {
        return redirect('mypage/article/create');
    }

    public function edit()
    {
        return view('mypage.article.edit');
    }

    public function update()
    {
        return redirect('mypage/article/edit');
    }
}
