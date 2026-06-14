<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function return(Request $request)
    {
        if ($request->filled('name') || $request->filled('email')) {
            return "Name: " . $request->name . " | Email: " . $request->email;
        }

        return "Fields must be filled!";
    }
}
