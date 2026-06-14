<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controllers lesson. Task 1 — Create your first controller

class PageController extends Controller
{   
    public function index()
    {
        return view('home');
    }

    public function pages()
    {
        return view('home');
    }

    public function about()
    {
        return "About page";
    }

    public function contact()
    {
        return "Contact page";
    }
}
