<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.index');
    }

    public function comics()
    {
        return view('guests.comics.index');
    }
}
