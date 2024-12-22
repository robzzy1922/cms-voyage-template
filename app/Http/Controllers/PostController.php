<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $all = \TCG\Voyager\Models\Post::orderBy('created_at', 'desc')->get();
        return view('post', compact('all'));
    }

}