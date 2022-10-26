<?php

namespace App\Http\Controllers;

use App\Models\Times;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function view()
    {
        $times = Times::all();

        return view('/times/list',['times' => $times]);
    }

    public function show()
    {
        return view('/times/form');
    }

    public function saveTimes(Request $request)
    {
    
    $data = request()->except(['_token','id','btn_times']);

    if($request->id){
        
        $times = Times::where('id_time', $request->id)->update($data);
       
    }else{

        $saveTimes = Times::create($request->all());

    }

        return redirect('/view_times');

    }

    public function delete(Request $request)
    {
        $times = Times::find($request->id);

        $times->delete();

        return redirect('view_times');
    }

    public function edit(Request $request)
    {
        $times = Times::where('id_time', $request->id)->first();    

        return view('times.form', ['times' => $times]);
    }

}

