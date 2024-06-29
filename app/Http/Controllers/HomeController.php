<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth;

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

    // public function index(){
    //     $role=Auth::user()->role;
    //     if($role=='0'){
    //         return view ('Admin');
    //     }
    //     if($role=='1'){
    //         return view('Student');
    //     }
    //     else
    //     {
    //         return view('Employer');
    //     }

    // }


}
