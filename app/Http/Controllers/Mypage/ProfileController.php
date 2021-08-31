<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
        return view('mypage.profile.create');
    }

    public function create()
    {
        return redirect('mypage/profile/create');
    }

    public function edit()
    {
        return view('mypage.profile.edit');
    }

    public function update()
    {
        return redirect('mypage/profile/edit');
    }
}
