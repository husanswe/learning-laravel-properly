<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginformController extends Controller
{
    public function loginform()
    {
        return view('loginform');
    }

    public function login(Request $request)
    {
        if ($request->username === 'admin') {
            return redirect('/dashboard')->with('status', 'Welcome admin!');
        }
        return back()->with('error', 'Invalid username');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
