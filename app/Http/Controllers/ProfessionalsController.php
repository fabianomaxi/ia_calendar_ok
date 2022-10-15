<?php

namespace App\Http\Controllers;

use App\Models\Professionals;
use Illuminate\Http\Request;

class ProfessionalsController extends Controller
{
    public function view()
    {
        $profissionais = Professionals::all();

        // print_r($profissionais);
        // exit;

        return view('/professionals/list');
    }

    public function show()
    {
        return view('/professionals/form');
    }

    public function saveProfessionals(Request $request)
    {
        $saveProfessionals = Professionals::create($request->all());

        print_r( $request->all() );
        print_r($saveProfessionals);
    }

}
