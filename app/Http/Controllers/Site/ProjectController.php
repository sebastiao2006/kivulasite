<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function index()
    {
        return view('site.projects.index');
    }

    public function show($id)
    {
        return view('site.projects.show');
    }
}
