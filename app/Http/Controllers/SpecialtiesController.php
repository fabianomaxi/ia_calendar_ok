<?php

namespace App\Http\Controllers;

use App\Models\Specialties;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    public function view()
    {

        $especialidades = Specialties::all();

        // print_r($especialidades);
        // exit;

        
        return view('/specialities/list');
    }

    public function show()
    {
        return view('/specialities/form');
    }

    public function saveSpecialties(Request $request)
    {
        $saveSpecialties = Specialties::create($request->all());

        return redirect('/view_officies');
        
        // print_r( $request->all() );
        // print_r($saveSpecialties);
    }

}