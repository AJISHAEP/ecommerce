<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\product;
use Illuminate\Http\Request;

class DashboardController
{
    public function dashboard(){
        return view('dashboard');
    }
    public function welcome(){
        $products=product::all();
        $catagories=catagory::all();
        return view('welcome',compact('catagories','products'));
    }
}
