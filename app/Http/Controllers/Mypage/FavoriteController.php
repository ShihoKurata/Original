<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function index()
    {
        return view('mypage.favorite.index');
    }
    
    public function show()
    {
        return view('mypage.favorite.show');
    }
    
    
}
