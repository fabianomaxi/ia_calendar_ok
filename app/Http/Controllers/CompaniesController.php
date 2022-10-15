<?php

namespace App\Http\Controllers;
use App\Models\companies;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function view()
    {
        $compania = Companies::all();

        return view('/companies/list');
    }

    public function show()
    {
        return view('/companies/form');
    }

    public function saveCompanies(Request $request)
    {
        $saveCompanies = Companies::create($request->all());

        return redirect('/view_companies');

        // print_r( $request->all() );
        // print_r($savecompanies);
    }

}