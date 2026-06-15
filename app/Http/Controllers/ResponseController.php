<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function json()
    {
        return response()->json(['name'=>'Husan', 'role' => 'swe']);
    }

    public function view()
    {
        return view('response.view');
    }
}
