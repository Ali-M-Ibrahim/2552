<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Item::all();
        return view('items.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('items.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'price'=>'required|numeric',
        ]);
        $item = new Item();
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->description = $request->input('description');
        $item->category_id = $request->input('category_id');
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Item::findOrFail($id);
        return view('items.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Item::findOrFail($id);
        $categories = Category::all();

        return view('items.edit',compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'price'=>'required|numeric',
        ]);
        $item = Item::findOrFail($id);
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->description = $request->input('description');
        $item->category_id = $request->input('category_id');
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.index');
    }
}
