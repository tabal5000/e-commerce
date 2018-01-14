<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Storage;

class ItemsAPIController extends Controller
{
    public function index()
    {
        $items = Item::where('active',1)->get();
        $request = request()->user();
        if($request) {
          if($request->isAdmin() || $request->isStaff()) {
            $items = Item::all();
          }
        }
        return response()->json($items,200);
    }

    public function show(Item $item)
    {
        return response()->json($item,200);
    }

    public function store(Request $request)
    {
        $url = $request->img;
        $contents = file_get_contents($url);
        $name = substr($url, strrpos($url, '/') + 1);
        $path = 'public/' . $name;
        Storage::put($path, $contents);
        $item = Item::create([
          'title' => $request['title'],
          'description' => $request['description'],
          'price' => $request['price'],
          'img' => $name,
        ]);
        return response()->json($item, 201);
    }

    public function update(Request $request,Item $item)
    {
        $url = $request->img;
        $contents = file_get_contents($url);
        $name = substr($url, strrpos($url, '/') + 1);
        $path = 'public/' . $name;
        Storage::put($path, $contents);
        $request['img'] = $name;
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function deactivateProduct(Item $item)
    {
        $item->update([
          'active' => '0'
        ]);
        return response()->json(null, 204);
    }

    public function activateProduct(Item $item)
    {
        $item->update([
          'active' => '1'
        ]);
        return response()->json(null, 204);
    }
}
