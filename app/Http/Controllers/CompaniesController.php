<?php

namespace App\Http\Controllers;
use App\Models\companies;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function view()
    {
        $companies = Companies::all();

        return view('/companies/list',['companies' => $companies]);
    }

    public function show()
    {
        return view('/companies/form');
    }

    public function saveCompanies(Request $request)
    {
    
    $data = request()->except(['_token','id','btn_companies']);

    if($request->id){
        
        $companies = Companies::where('id_company', $request->id)->update($data);
       
    }else{

        $saveCompanies = Companies::create($request->all());

    }

        return redirect('/view_companies');

    }

    public function delete(Request $request)
    {
        $companies = Companies::find($request->id);

        $companies->delete();

        return redirect('view_companies');
    }
    
    public function edit(Request $request)
    {
        $companies = Companies::where('id_company', $request->id)->first();    

        return view('companies.form', ['companies' => $companies]);
    }

}