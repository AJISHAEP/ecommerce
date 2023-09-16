<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart($id){
            // $product= product::where('id',decrypt($id) )->get();
            $product=product::findOrFail(decrypt($id));
            return $product;
            return view('cart');

    }
}
