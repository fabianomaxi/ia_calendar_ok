<?php

namespace App\Http\Controllers;

use App\Models\Times;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function view()
    {
        $tempo = Times::all();

        // print_r($tempo);
        // exit;

        return view('/times/list');
    }

    public function show()
    {
        return view('/times/form');
    }

    public function saveTimes(Request $request)
    {
        $saveTimes = Times::create($request->all());

        print_r( $request->all() );
        print_r($saveTimes);
    }

}

