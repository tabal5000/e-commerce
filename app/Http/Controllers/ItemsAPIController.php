<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsAPIController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return response()->json($items,200);
    }

    public function show(Item $item)
    {
        return response()->json($item,200);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());

        return response()->json($item, 201);
    }

    public function update(Request $request,Item $item)
    {
        $item->update($request->all());

        return response()->json($item, 200);
    }

    public function delete(Item $item)
    {
        $item->delete();

        return response()->json(null, 204);
    }
}
