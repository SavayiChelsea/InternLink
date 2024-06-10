<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('auth.homepage');
    }
    public function internships()
    {
        return view('auth.internships');
    }
}
