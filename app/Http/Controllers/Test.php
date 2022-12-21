<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index(Request $request)
    {

        $line = $request->line;

        return view('dashboard');
    }
}
