<?php

namespace App\Http\Controllers;

use App\Models\Specialties;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    public function view()
    {

        $specialties = Specialties::all();
        
        return view('/specialties/list',['specialties' => $specialties]);
    }

    public function show()
    {
        return view('/specialties/form');
    }

    public function saveSpecialties(Request $request)
    {
        $saveSpecialties = Specialties::create($request->all());

        return redirect('/view_specialties');
        
    }

    public function delete(Request $request)
    {
        $specialties = Specialties::find($request->id);

        $specialties->delete();

        return redirect('view_specialties');
    }

}