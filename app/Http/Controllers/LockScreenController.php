<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LockScreenController extends Controller
{
    public function lock(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Store the URL the user was trying to access before locking the screen
        session(['previous_url' => url()->previous()]);

        // Redirect to lock screen view
        return view('auth.lock-screen');
    }

    public function unlock(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        // Attempt to login the user
        if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            // Redirect to the previous URL or dashboard if not set
            return redirect(session('previous_url', route('dashboard')));
        }

        // Redirect back with error message if login fails
        return back()->withErrors(['password' => 'Incorrect password']);
    }
}
