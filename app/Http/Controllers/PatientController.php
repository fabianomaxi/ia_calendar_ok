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
    
    $data = request()->except(['_token','id','btn_patient']);

    if($request->id){
        
        $patient = Patient::where('id_patient', $request->id)->update($data);
       
    }else{

        $savePatient = Patient::create($request->all());

    }

        return redirect('/view_patient');

    }

    public function delete(Request $request)
    {
        $patient = Patient::find($request->id);

        $patient->delete();

        return redirect('view_patient');
    }

    public function edit(Request $request)
    {
        $patient = Patient::where('id_patient', $request->id)->first();    

        return view('patient.form', ['patient' => $patient]);
    }

}
