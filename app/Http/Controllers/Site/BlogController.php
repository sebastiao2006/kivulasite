<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('site.blog.index');
    }

    public function show($id)
    {
        return view('site.blog.show');
    }
}