<?php

namespace App\Http\Controllers;

use App\Models\Professionals;
use Illuminate\Http\Request;

class ProfessionalsController extends Controller
{
    public function view()
    {
        $professionals = Professionals::all();

        return view('/professionals/list',['professionals' => $professionals]);
    }

    public function show()
    {
        return view('/professionals/form');
    }

    public function saveProfessionals(Request $request)
    {
        $saveProfessionals = Professionals::create($request->all());

        return redirect('/view_professionals');
    }

}
