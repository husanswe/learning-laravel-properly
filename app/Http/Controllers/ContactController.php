<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name"  => "required|string|min:3",
            "email" => "required|email",
        ]);

        return "Name: " . e($validated['name']) . " | Email: " . e($validated['email']);

    }
}
