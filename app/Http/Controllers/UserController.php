<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users/usersIndex',[
         'users'=>$users 
        ]);
    }

    public function delete(Request $request){
        User::find($request->id)->delete();
        return redirect('users/usersIndex');
    }

}
