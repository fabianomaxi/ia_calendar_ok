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
        $users = Users::all();

        return view('/users/list',['users' => $users]);
        
    }

    public function show()
    {
        return view('/users/form');
    }

    public function saveUsers(Request $request)
    {
        $saveUsers = Users::create($request->all());

        return redirect('/view_users');

    }

    public function delete(Request $request)
    {
        $users = Users::find($request->id);

        $users->delete();

        return redirect('view_users');
    }

    public function update(Request $request)
    {
        $user = Users::where('id_user', $request->id)->update($request->all());

           
    }
    
    public function edit(Request $request)
    {
        $user = Users::where('id_user', $request->id)->first();    

        return view('users.form', ['user' => $user]);
    }

}
