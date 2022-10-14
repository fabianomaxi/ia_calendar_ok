<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessionalsController extends Controller
{
    public function view()
    {
        return view('/professionals/list');
    }

    public function show()
    {
        return view('/professionals/form');
    }

}
