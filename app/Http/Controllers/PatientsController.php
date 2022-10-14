<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function view()
    {
        return view('/patients/list');
    }

    public function show()
    {
        return view('/patients/form');
    }

}
