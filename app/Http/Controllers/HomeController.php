<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function internships()
    {
        return view('auth.internships');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function signin()
    {
        return view('auth.signin');
    }



}
