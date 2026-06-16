<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(string $name) 
    {
        return view('user', ['name' => $name, 'date' => now()->format('d F Y')]);
    }
}
