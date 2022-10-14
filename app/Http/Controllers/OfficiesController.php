<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficiesController extends Controller
{
    public function view()
    {
        return view('/officies/list');
    }

    public function show()
    {
        return view('/officies/form');
    }
}


