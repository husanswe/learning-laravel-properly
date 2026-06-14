<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
        ]);
        
        return response()->json($validated);
    }
}
