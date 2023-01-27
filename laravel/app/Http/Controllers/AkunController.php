<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('create');
    }
}
