<?php

namespace App\Http\Controllers;

use App\Models\Holidays;

use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    public function view()
    {
        $holidays = Holidays::all(); 

        return view('/holidays/list',['holidays' => $holidays]);
    }

    public function show()
    {
        return view('/holidays/form');
    }

    public function saveHolidays(Request $request)
    {
    
    $data = request()->except(['_token','id','btn_holidays']);

    if($request->id){
        
        $holidays = Holidays::where('id_holiday', $request->id)->update($data);
       
    }else{

        $saveHolidays = Holidays::create($request->all());

    }

        return redirect('/view_holidays');

    }

    public function delete(Request $request)
    {
        $holidays = Holidays::find($request->id);

        $holidays->delete();

        return redirect('view_holidays');
    }

    public function edit(Request $request)
    {
        $holidays = Holidays::where('id_holiday', $request->id)->first();    

        return view('holidays.form', ['holidays' => $holidays]);
    }

}