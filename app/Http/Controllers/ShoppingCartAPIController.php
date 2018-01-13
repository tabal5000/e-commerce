<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;
use Auth;
use Session;

class ShoppingCartAPIController extends Controller
{
  public function storeOrder(Request $request) {
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    $user_id = Auth::user()->id;

    $order = new Order();
    $order->cart = serialize($cart);
    Auth::user()->orders()->save($order);
    return response()->json($order,201);
  }
}
