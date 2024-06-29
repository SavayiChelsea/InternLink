<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        if(Auth::user()->role == '1')
        {
            return view('dashboard');
        }

        else
        {
            return view('admin.home');
        }

    }

}
