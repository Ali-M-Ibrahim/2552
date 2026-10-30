<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $title = 'List of all Products 2';
        // method 1 to send data from controller to view
        // return view('products.index',['products'=>$data,'title'=>$title]);
        // method 2 to send data from controller to view
        // return view('products.index')
        //     ->with('products', $data)
        //     ->with('title', $title);

        return view('products.index', compact(['products', 'title']));
    }

    public function create()
    {
        return view('products.create');
    }

    public function save(Request $request)
    {
        $form_name = $request->name;
        $form_desc = $request->description;
        $form_price = $request->price;

        // $product = new Product;
        // $product->name = $form_name;
        // $product->description = $form_desc;
        // $product->price = $form_price;
        // $product->save();

        Product::create($request->all());

        return redirect()->route('list-products');
    }
}
