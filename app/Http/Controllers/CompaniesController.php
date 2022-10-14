<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function view()
    {
        return view('/companies/list');
    }

    public function show()
    {
        return view('/companies/form');
    }

}
