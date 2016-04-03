<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Hash;
class UserController extends Controller
{
    public function getList(){
        return view('backend.user.user_list');
    }
    public function getAdd(){
        return view('backend.user.user_add');
    }
    
    public function postAdd(Request $request){
        $user = new User();
        $user->username = $request->txtUser;
        $user->password = Hash::make($request->txtPass);
        $user->email = $request->txtEmail;
        $user->remember_token = $request->_token;
        $user->level = $request->rdoLevel;
        $user->save();
    }
}
