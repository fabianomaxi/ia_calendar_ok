<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function loginIsValid(Request $request)
    {
        $users = Users::select('name','id_user')->where('email', $request->email)
            ->where('password', $request->password)
            ->where('status', "1")
            ->first() ;

        if( empty( $users ) ) {
            return redirect('/');

        } else {
            $request->session()->put('id_user', $users->id_user);
            $request->session()->put('name', $users->name );
            return redirect('/index');

        }       
    }

    public function exit(Request $request)
    {
        session()->forget('id_user');
        session()->forget('name');
        
        return redirect('/');

    }

    public function view()
    {
        return view('/users/list');
    }

    public function show()
    {
        return view('/users/form');
    }

}
