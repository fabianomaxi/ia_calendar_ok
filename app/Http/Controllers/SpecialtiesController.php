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
    
    $data = request()->except(['_token','id','btn_specialties']);

    if($request->id){
        
        $specialties = Specialties::where('id_specialty', $request->id)->update($data);
       
    }else{

        $saveSpecialties = Specialties::create($request->all());

    }

        return redirect('/view_specialties');

    }

    public function delete(Request $request)
    {
        $specialties = Specialties::find($request->id);

        $specialties->delete();

        return redirect('view_specialties');
    }

    public function edit(Request $request)
    {
        $specialties = Specialties::where('id_specialty', $request->id)->first();    

        return view('specialties.form', ['specialties' => $specialties]);
    }

}