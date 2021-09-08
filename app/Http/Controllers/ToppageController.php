<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppageController extends Controller
{
    public function index()
    {
        return view('toppage.index');
    }
    
    public function show()
    {
        return view('toppage.show');
    }
    
    
}
