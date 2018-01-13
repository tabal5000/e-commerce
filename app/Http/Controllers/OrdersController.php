<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use App\Cart;
use App\Order;
use Session;
use Auth;

class OrdersController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }


  public function index() {
    $user = request()->user();
    $user->authorizeRoles(['staff','admin']);

    $request = Request::create('/api/orders', 'GET');
    $orders = Route::dispatch($request)->getData();
    return view('orders/index',compact('orders'));
  }

  public function acceptOrder(Order $order) {
    $request = Request::create('/api/orders/' . $order->id . '/accept', 'GET');
    $orders = Route::dispatch($request)->getData();
    return redirect('/orders');
  }

  public function rejectOrder(Order $order) {
    $request = Request::create('/api/orders/' . $order->id . '/reject', 'GET');
    $orders = Route::dispatch($request)->getData();
    return redirect('/orders');
  }

  public function deleteOrder(Order $order) {
    $request = Request::create('/api/orders/' . $order->id ,'DELETE');
    $orders = Route::dispatch($request)->getData();
    return redirect('/orders');
  }

  public function userOrders() {
    $user = Auth::user();
    $request = Request::create('/api/myOrders','GET');
    $orders = Route::dispatch($request)->getData();
    return view('orders/userOrders',compact('orders'));
  }
}
