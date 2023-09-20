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
    if (Auth::check()) {
        $user = Auth::user();
    $cartItems = Cart::where('userId', Auth::user()->id)->with('products')->get();
    return view('cartlist', compact('cartItems'));
} else {

    return redirect('signin');
}
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
public function placeoorder($id){

$cartItems=Cart::where('userId',Auth::id())->get();
$address=Account::find(decrypt($id));

    return view('placeorder',compact('cartItems','address'));
}public function placeorder(Request $request){
    // Check if the cart is empty
    $cartItems = Cart::where('userId', Auth::user()->id)->get();
    if ($cartItems->isEmpty()) {
        return redirect()->back()->with('message', 'Your cart is empty.');
    }

    $order = new Order();
    $order->user_id = Auth::id();
    $total = 0;
    $cartItems_total = $cartItems;

    foreach ($cartItems_total as $prod) {
        $total += $prod->products->price;
    }

    $order->total_price = $total;
    $order->fname = $request->input('fname');
    $order->lname = $request->input('lname');
    $order->address1 = $request->input('address1');
    $order->address2 = $request->input('address2');
    $order->state = $request->input('state');
    $order->phone = $request->input('phone');
    $order->city = $request->input('city');
    $order->pin = $request->input('pin');
    $order->email = $request->input('email');
    $order->tracking_no = 'abc' . rand(1111, 9999);
    $order->save();

    $order->id;

    foreach ($cartItems as $cartItem) {
        OrderItem::create([
            'order_id' => $order->id,
            'prod_id' => $cartItem->id,
            'qlty' => $cartItem->quantity,
            'price' => $cartItem->products->price,
        ]);
    }

    if (Auth::user()->address1 == NULL) {
        $user = User::where('id', Auth::user()->id)->first();
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->state = $request->input('state');
        $user->city = $request->input('city');
        $user->pin = $request->input('pin');
        $user->email = $request->input('email');
        $user->update();
    }

    Cart::destroy($cartItems);

    return redirect()->back()->with('message', 'Order Placed Successfully');
}


public function show($id)
{
    $product = product::find($id);
    if (!$product) {

        return abort(404);
    }
    return view('productdetails', compact('product'));
}
public function orderlist(){
    $orders=Order::where('user_id', Auth::user()->id)->get();
    return view('orderlist', compact('orders'));
}
}

