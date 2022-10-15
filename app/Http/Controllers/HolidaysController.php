<?php

namespace App\Http\Controllers;

use App\Models\Holidays;

use Illuminate\Http\Request;

class HolidaysController extends Controller
{
    public function view()
    {
        $feriado = Holidays::all();

        // print_r($feriado);
        // exit;

        return view('/holidays/list');
    }

    public function show()
    {
        return view('/holidays/form');
    }

    public function saveHolidays(Request $request)
    {
        $saveHolidays = Holidays::create($request->all());

        print_r( $request->all() );
        print_r($saveHolidays);
    }

}