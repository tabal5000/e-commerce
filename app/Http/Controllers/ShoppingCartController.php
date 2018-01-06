<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use App\Cart;
use Session;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request, $id) {
      $request = Request::create('/api/items/' . $id , 'GET');
      $item = Route::dispatch($request)->getData();

      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($item,$item->id);

      Session::put('cart',$cart);
      return redirect()->back();
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCart() {
      if(!Session::has('cart')){
        return view('shopping-cart/index', ['items' => null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('shopping-cart/index', ['items' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout() {
      if(!Session::has('cart')){
        return view('shopping-cart/index', ['items' => null]);
      }
      $oldCart = Session::get('cart');
      $cart = new cart($oldCart);
      $total = $cart->totalPrice;
      return view('shopping-cart/checkout', ['total' => $total]);
    }
}
