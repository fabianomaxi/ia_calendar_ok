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
        $saveHolidays = Holidays::create($request->all());

        return redirect('/view_holidays');
    }

}