<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    public function view()
    {
        return view('/holidays/list');
    }

    public function show()
    {
        return view('/holidays/form');
    }
}
