<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use App\Item;

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
        return view('items/create');
    }

    public function store() {
        // dd(request()->all());
        // $post = new Post;
        // $post->title = request('title');
        // $post->description = request('description');
        // $post->price = request('price');
        // $post->save();
        $this->validate(request(), [
            'title' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'img_url' => 'required'
        ]);
        $data = request()->all();
        $request = Request::create('/api/items','POST', $data);
        $response = Route::dispatch($request);
        return redirect('/');
    }
}
