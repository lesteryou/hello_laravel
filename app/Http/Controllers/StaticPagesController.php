<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index()
    {
        return view('static_pages/index');
    }

    public function about()
    {
        return view('static_pages/about');
    }

    public function help()
    {
        return view('static_pages/help');
    }
}
