<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public function add()
    {
        return view('mypage.log.create');
    }
    
    public function create(Request $request)
    {
        return redirect('mypage/log/create');
    }

    public function edit()
    {
        return view('mypage.log.edit');
    }

    public function update()
    {
        return redirect('mypage/log/edit');
    }
    
    public function index()
    {
        return view('mypage.log.index');
    }
    
     public function show()
    {
        return view('mypage.log.show');
    }
}
