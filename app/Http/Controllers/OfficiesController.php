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
    
    $data = request()->except(['_token','id','btn_officies']);

    if($request->id){
        
        $officies = Officies::where('id_office', $request->id)->update($data);
       
    }else{

        $saveOfficies = Officies::create($request->all());

    }

        return redirect('/view_officies');

    }


    public function delete(Request $request)
    {
        $officies = Officies::find($request->id);

        $officies->delete();

        return redirect('view_officies');
    }

    public function edit(Request $request)
    {
        $officies = Officies::where('id_office', $request->id)->first();    

        return view('officies.form', ['officies' => $officies]);
    }

}