<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart($id){
            // $product= product::where('id',decrypt($id) )->get();
            $product=product::findOrFail($id);
            return view('cart');
            
    }
}
