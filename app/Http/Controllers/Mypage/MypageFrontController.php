<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MypageFrontController extends Controller
{
    public function index()
    {
        return view('mypage.mypage_front');
    }
}
