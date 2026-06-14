<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function submit(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";

        $data = $request->only(['name', 'email']);

        return "<h2>Filtered data:</h2>
                <p>Name: " . e($data['name']) . "</p>
                <p>Email: " . e($data['email']) . "</p>";
    }
}
