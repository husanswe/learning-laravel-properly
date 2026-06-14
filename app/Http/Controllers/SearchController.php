<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('query') && $request->filled('age')) {
            return "You searched for: " . e($request->input('query')) . "<br>" . " Age: " . e($request->age);
        }
        return view('search.index');
    }
}
