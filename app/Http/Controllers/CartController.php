<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
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
public function placeoorder(){

$cartItems=Cart::where('userId',Auth::id())->get();
    return view('placeorder',compact('cartItems'));
}
public function placeorder(Request $request){

    // $request->validate([
    //     'fname'=> ['required', 'string', 'max:499'],
    //     'lname'=> ['required', 'string', 'max:499'],
    //     'email'=> ['required', 'string', 'max:499'],
    //     'phone'=> ['required', 'string', 'max:499'],
    //      'address1' => ['required', 'string', 'max:499'],
    //        'address2' => ['required', 'string', 'max:499'],
    //         'city' => ['required', 'string'],
    //         'state' => ['required', 'string'],
    //        'pin' => ['required', 'digits:6'],
    //  ]);
    $order=new Order();
    $order->user_id=Auth::id();
    $total=0;
    $cartItems_total=Cart::where('userId', Auth::user()->id)->get();
    foreach($cartItems_total as $prod)
    {
        $total+=$prod->products->price;

    }
    $order->total_price=$total;
    $order->fname=$request->input('fname');
    $order->lname=$request->input('lname');
    $order->address1=$request->input('address1');
    $order->address2=$request->input('address2');
    $order->state=$request->input('state');
    $order->phone=$request->input('phone');
    $order->city=$request->input('city');
    $order->pin=$request->input('pin');
    $order->email=$request->input('email');
    $order->tracking_no='abc'.rand(1111,9999);
    $order->save();
    $order->id;
    $cartItems = Cart::where('userId', Auth::user()->id)->get();
    foreach($cartItems as $cartItem)
    {
        OrderItem::create([
            'order_id'=>$order->id,
            'prod_id'=>$cartItem->id,
            'qlty'=>$cartItem->quantity,
            'price'=>$cartItem->products->price,
        ]);
    }
    if(Auth::user()->address1==NULL)
    {
        $user=User::where('id',Auth::user()->id)->first();
        $user->fname=$request->input('fname');
        $user->lname=$request->input('lname');
        $user->address1=$request->input('address1');
        $user->address2=$request->input('address2');
        $user->state=$request->input('state');
        $user->city=$request->input('city');
        $user->pin=$request->input('pin');
        $user->email=$request->input('email');
        $user->update();
    }
    $cartItems = Cart::where('userId', Auth::user()->id)->get();
    Cart::destroy($cartItems);

    return redirect()->back()->with('message','Order Placed Successfully');
}
public function orderlist(){
    return view('orderlist');
}
}

