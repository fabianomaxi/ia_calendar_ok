<?php

namespace App\Http\Controllers;

use App\Models\companyPatient;
use Illuminate\Http\Request;

class CompanyPatientController extends Controller
{
    public function view()
    {
        $companyPatient = CompanyPatient::all();

        return view('/companyPatient/list',['companyPatient' => $companyPatient]);
    }

    public function show()
    {
        return view('/companyPatient/form');
    }

    public function saveCompanyPatient(Request $request)
    {
    
    $data = request()->except(['_token','id','btn_companyPatient']);

    if($request->id){
        
        $companyPatient = CompanyPatient::where('id_patient', $request->id)->update($data);
       
    }else{

        $saveCompanyPatient = companyPatient::create($request->all());

    }

        return redirect('/view_companyPatient');

    }

    public function delete(Request $request)
    {
        $companyPatient = CompanyPatient::find($request->id);

        $companyPatient->delete();

        return redirect('view_companyPatient');
    }

    public function edit(Request $request)
    {
        $companyPatient = CompanyPatient::where('id_company_patient', $request->id)->first();    

        return view('companyPatient.form', ['companyPatient' => $companyPatient]);
    }

}
