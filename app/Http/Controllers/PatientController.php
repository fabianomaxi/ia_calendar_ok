<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function view()
    {
        $patient = Patient::all();

        return view('/patient/list',['patient' => $patient]);
    }

    public function show()
    {
        return view('/patient/form');
    }

    public function savePatient(Request $request)
    {
        $savePatient = Patient::create($request->all());

        return redirect('/view_patient');
    }

    public function delete(Request $request)
    {
        $patient = Patient::find($request->id);

        $patient->delete();

        return redirect('view_patient');
    }

}
