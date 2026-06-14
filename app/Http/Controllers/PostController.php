<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = ['Laravel basics', 'OOP in PHP', 'MySQL joins'];
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        return view('posts.show', ['id' => $id]);
    }

    /* public function show(Request $request, int $id)
    {
        return "Post ID: " . $id . " | Method: " . $request->method();
    } */

    public function create()
    {
        return "Create post form";
    }

    public function store()
    {
        return "Post saved";
    }

    public function destroy(int $id)
    {
        return "Post number " . $id . " deleted";
    }
}
