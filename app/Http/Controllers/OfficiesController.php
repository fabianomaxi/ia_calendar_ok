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

    public function delete(Request $request)
    {
        $officies = Officies::find($request->id);

        $officies->delete();

        return redirect('view_officies');
    }

    public function update(Request $request)
    {
        $officies = Officies::where('id_officies', $request->id)->update($request->all());
           
    }
    
    public function edit(Request $request)
    {
        $officies = Officies::where('id_office', $request->id)->first();    

        return view('officies.form', ['officies' => $officies]);
    }

}