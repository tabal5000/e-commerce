<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('items/index',compact('name','items'));
    }

    public function show(Item $item) {
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
            'description' => 'required'
        ]);

        Item::create(request()->all());
        return redirect('/');
    }
}
