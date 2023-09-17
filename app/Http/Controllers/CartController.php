<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product; // Ensure that the model name is capitalized correctly
use App\Models\Cart;
use DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(Request $request)
    {
       

        if (Auth::check()) { // Check if the user is authenticated
            $user = Auth::user(); // Retrieve the authenticated user

            // $product = product::find($id);

            // if (!$product) {
            //     // Product not found, handle the error (e.g., return a response or show an error message)
            //     return redirect()->back()->with('error', 'Product not found.');
            // }
            
            // Now you can safely access $product->name and other properties


            $cart = new Cart();

            $cart->userId = $user->id;

            
            $cart->productId = $request->input('id');
          

             $cart->quantity = $request->input('quantity');
            $cart->save();
            return redirect(route('welcome'))->with('message','product added to cart successfully');
        } else {
            return redirect('signin');
            
        }
    }
    public function cartlist(){
        $cartItems=Cart::where('id',Auth::user()->id)->get();
        // $cartItems=DB::table('product')
        // ->join('carts','carts.productId','product.id')
        // ->select('product.name','product.price','product.image','carts.*')
        // ->where('carts.userId',session()->get('id'))
        // ->get();
         return view('cartlist',compact('cartItems'));
    }
}

//             $product=product::findOrFail($id);
//             $cart=session()->get('cart',[]);
//     if(isset($cart[$id])){
//         $cart[$id]['quantity']++;
//     }else{
//         $cart[$id]=[
//             'name'=>$product->name,
//             'quantity'=>1,
//             'price'=>$product->price,
//             'image'=>$product->image
//         ];
//     }
//     session()-> put('cart',$cart);

//     return redirect()->with('message','Product added to cart');
// }
           
