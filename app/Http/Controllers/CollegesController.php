<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegesController extends Controller
{
    public function index()
    {
        return view('colleges.index');
    }
}
