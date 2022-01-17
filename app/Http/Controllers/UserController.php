<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // proteger rutas con un constructor auth

    public function __construct()
    {
        $this->middleware('auth');
    }
/* metod index user */
    public function index(){

        $users = User::latest()->paginate(25);
        return view('users.index',[
            'users' => $users
        ]);
        return back();

    }
    
    public function store(){

    }

    /* metododo delete */
    public function delete(User $user){

        $user->delete();

        return back();

    }


    /* edit user */
    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit',['user'=>$user]);

    }

    /* Update user */
    public function update(Request $request, $id){

        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect('/users')->with('mesageUpdate', 'El usuario se ha modificado exitosamente');

    }      
}