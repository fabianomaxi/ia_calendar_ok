<?php

namespace App\Http\Controllers;

use App\Models\Officies;
use Illuminate\Http\Request;

class OfficiesController extends Controller
{
    public function view()
    {
        $escritorio = Officies::all();

        // print_r($escritorio);
        // exit;

        return view('/officies/list');
    }
 
    public function show()
    {
        return view('/officies/form');
    }


    public function saveOfficies(Request $request)
    {
        $saveOfficies = Officies::create($request->all());

        print_r( $request->all() );
        print_r($saveOfficies);
    }

}