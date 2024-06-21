<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function internships()
    {
        return view('auth.internships');
    }

    public function registerstudent()
    {
        return view('auth.registerstudent');
    }

    public function signinstudent()
    {
        return view('auth.signinstudent');
    }

    public function registeremployer()
    {
        return view('auth.registeremployer');
    }


    public function signinemployer()
    {
        return view('auth.signinemployer');
    }

}
