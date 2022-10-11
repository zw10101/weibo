<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()//主页
    {
        return view('static_pages/home');
    }

    public function help()//帮助页
    {
        return view('static_pages/help');
    }

    public function about()//帮助页dsadasdsa
    {
        return view('static_pages/about');
    }
}
