<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnketController extends Controller
{
    public function anketView()
    {
        return view('anket');
    }
}
