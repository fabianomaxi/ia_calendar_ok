<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function view()
    {
        $pacientes = Patient::all();

        // print_r($pacientes);
        // exit;

        return view('/patient/list');
    }

    public function show()
    {
        return view('/patient/form');
    }

    public function savePatient(Request $request)
    {
        $savePatient = Patient::create($request->all());

        print_r( $request->all() );
        print_r($savePatient);
    }

}
