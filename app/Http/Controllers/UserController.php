<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users/index',[
         'users'=>$users 
        ]);
    }

    public function deleteConf(Request $request){
        $user = User::find($request->id);
        return view('users/delete',[
            'user'=>$user
        ]);
    }

    public function delete(Request $request){
        User::find($request->id)->authorization->delete();
        User::find($request->id)->delete();
        return redirect('users');
    }

}
