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
    
    $data = request()->except(['_token','id','btn_professionals']);

    if($request->id){
        
        $professionals = Professionals::where('id_professionals', $request->id)->update($data);
       
    }else{

        $saveProfessionals = Professionals::create($request->all());

    }

        return redirect('/view_professionals');

    }

    public function delete(Request $request)
    {
        $professionals = Professionals::find($request->id);

        $checkExist = Professionals::where('id_specialty',$request->id)->first();

        if( $checkExist ) {
            echo "Não foi possivel deletar pois existe uma associação" ;
            exit;
            }

        $professionals->delete();

        return redirect('view_professionals');
    }

    public function edit(Request $request)
    {
        $professionals = Professionals::where('id_professionals', $request->id)->first();    

        return view('professionals.form', ['professionals' => $professionals]);
    }

}
