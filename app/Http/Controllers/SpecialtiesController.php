<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    public function view()
    {
        return view('/specialities/list');
    }

    public function show()
    {
        return view('/specialities/form');
    }

}
