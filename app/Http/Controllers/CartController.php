<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Account;
use DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(Request $request)
{
    if (Auth::check()) {
        $user = Auth::user();
        $productId = $request->input('id');
        $quantity = $request->input('quantity');


        $existingCartItem = Cart::where('userId', $user->id)
                                ->where('productId', $productId)
                                ->first();

        if ($existingCartItem) {

            $existingCartItem->quantity = $quantity;
            $existingCartItem->save();
        } else {

            $cart = new Cart();
            $cart->userId = $user->id;
            $cart->productId = $productId;
            $cart->quantity = $quantity;
            $cart->save();
        }

        return redirect(route('welcome'))->with('message', 'Product added to cart successfully');
    } else {
        return redirect('signin');
    }
}

    public function cartlist()
{
    $cartItems = Cart::where('userId', Auth::user()->id)->with('products')->get();
    return view('cartlist', compact('cartItems'));
}

public function showAddresses()
{
    if (Auth::check()) {
        $user = Auth::user();
        $addresses = $user->addresses;

        return view('showaddresses', compact('addresses'));
    } else {

        return redirect('signin');
    }
}
public function placeorder(){
    $cartItems = Cart::where('userId', Auth::user()->id)->with('products')->get();
    return view('placeorder', compact('cartItems'));
}
public function order(){
}


