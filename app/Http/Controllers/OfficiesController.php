<?php

namespace App\Http\Controllers;

use App\Models\Officies;
use Illuminate\Http\Request;

class OfficiesController extends Controller
{
    public function view()
    {
        $officies = Officies::all();

        return view('/officies/list',['officies' => $officies]);
    }
 
    public function show()
    {
        return view('/officies/form');
    }


    public function saveOfficies(Request $request)
    {
        $saveOfficies = Officies::create($request->all());

        return redirect('/view_officies');
    }

}