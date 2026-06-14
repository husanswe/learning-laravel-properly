<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function store(Request $request) {
        if($request->filled('name') && $request->filled('age')) {
            return "You searched for: " . $request->name . " | Age: " . $request->age ;
        } else {
            return "Please enter a search term!";
        }
    }
}
