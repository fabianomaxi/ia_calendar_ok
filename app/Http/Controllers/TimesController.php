<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function view()
    {
        return view('/times/list');
    }

    public function show()
    {
        return view('/times/form');
    }

}

