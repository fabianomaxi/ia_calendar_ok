<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyPatientsController extends Controller
{
    public function view()
    {
        return view('/companyPatients/list');
    }

    public function show()
    {
        return view('/companyPatients/form');
    }

}
