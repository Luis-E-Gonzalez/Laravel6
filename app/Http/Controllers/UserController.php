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

        $users = User::all();
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

}
