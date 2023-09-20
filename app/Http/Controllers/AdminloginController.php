<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    public function login(){
        return view ('admin');
    }
    public function doLogin(){
        $input=request()->only(['username','password']);
        if(auth()->guard('admins')->attempt($input,request('remember_me'))){
            return redirect()->route('admin.product.list');
        }
        else{
            return redirect()->route('admin.login')->with('message','Login Failed');
        }

    }
    public function logout(){
        auth()->guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
