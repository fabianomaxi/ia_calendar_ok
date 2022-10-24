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
        $saveCompanies = Companies::create($request->all());

        return redirect('/view_companies');

    }

    public function delete(Request $request)
    {
        $companies = Companies::find($request->id);

        $companies->delete();

        return redirect('view_companies');
    }

    public function update(Request $request)
    {
        $companies = Companies::where('id_company', $request->id)->update($request->all());

           
    }
    
    public function edit(Request $request)
    {
        $companies = Companies::where('id_company', $request->id)->first();    

        return view('companies.form', ['companies' => $companies]);
    }

}