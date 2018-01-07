<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersAPIController extends Controller
{
  public function index() {
    $user = request()->user();
    $user->authorizeRoles(['staff','admin']);
    $newOrders = [];
    $newOrder = [];
    $orders = Order::get();
    foreach($orders as $order){
      $newOrder = $order;
      $newOrder->user_id = $order->user;
      $newOrder->cart = unserialize($order->cart);
      array_push($newOrders,$newOrder);
    }
    return response()->json($newOrders,200);
  }

  public function acceptOrder(Order $order) {
    $user = request()->user();
    $user->authorizeRoles(['staff','admin']);
    $order->update([
      'processed' => '1',
    ]);
    return response()->json($order,200);
  }

  public function rejectOrder(Order $order) {
    $user = request()->user();
    $user->authorizeRoles(['staff','admin']);
    $order->update([
      'processed' => '0',
    ]);
    return response()->json($order,200);
  }

  public function deleteOrder(Order $order) {
    $user = request()->user();
    $user->authorizeRoles(['staff','admin']);
    $order->delete();
    return response()->json(null, 204);
  }

}
