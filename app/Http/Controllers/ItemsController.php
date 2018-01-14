<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use App\Item;
use App\Cart;
use Session;

class ItemsController extends Controller
{

    public function __construct() {
      $this->middleware('auth')->except(['index','show']);
    }

    public function index() {
        $request = Request::create('/api/items', 'GET');
        $items = Route::dispatch($request)->getData();
        return view('items/index',compact('items'));
    }

    public function show($id) {
        $request = Request::create('/api/items/' . $id , 'GET');
        $item = Route::dispatch($request)->getData();
    	return view('items/show',compact('item'));
    }

    public function create() {
        $user = request()->user();
        $user->authorizeRoles(['staff','admin']);
        return view('items/create');
    }

    public function edit(Item $item) {
        return view('items/edit',compact('item'));
    }

    public function destroy(Item $item) {
      $request = Request::create('/api/items/' . $item->id , 'DELETE');
      $response = Route::dispatch($request);
      return redirect('/home');
    }

    public function update(Item $item) {
      $this->validate(request(), [
          'title' => 'required',
          'price' => 'required',
          'description' => 'required',
          'img' => 'required'
      ]);
      $request = Request::create('/api/items/' . $item->id , 'PUT', [$item]);
      $response = Route::dispatch($request);
      return redirect('/home');
    }

    public function store() {
        $user = request()->user();
        $user->authorizeRoles(['staff','admin']);
        // dd(request()->all());
        // $post = new Post;
        // $post->title = request('title');
        // $post->description = request('description');
        // $post->price = request('price');
        // $post->save();
        $this->validate(request(), [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'img' => 'required'
        ]);
        $data = request()->all();
        $request = Request::create('/api/items','POST', $data);
        $response = Route::dispatch($request);
        return redirect('/home');
    }

    public function addToCart(Request $request, $id) {
      $request = Request::create('/api/items/' . $id , 'GET');
      $item = Route::dispatch($request)->getData();

      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($item,$item->id);

      Session::put('cart',$cart);
      return redirect()->back();
    }

    public function deactivateProduct(Item $item)
    {
      $request = Request::create('/api/items/' . $item->id . '/deactivate' , 'GET');
      $response = Route::dispatch($request);
      return redirect('/items');
    }

    public function activateProduct(Item $item)
    {
      $request = Request::create('/api/items/' . $item->id . '/activate' , 'GET');
      $response = Route::dispatch($request);
      return redirect('/items');
    }
}
