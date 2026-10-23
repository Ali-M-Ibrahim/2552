<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create1()
    {
        $obj = new Product;
        $obj->name = 'Product 1';
        $obj->description = 'this is my first description';
        $obj->price = 100;
        $obj->save();

        return response()->json(['message' => 'Product Created Successfully !'], 201);
    }

    public function create2()
    {
        Product::create([
            'name' => 'Product 2',
            'description' => 'This is my description 2',
            'price' => 500,
        ]);

        return response()->json(['message' => 'Product Created Successfully !'], 201);

    }

    public function create3()
    {
        DB::table('products')->insert([
            'name' => 'Product 3',
            'description' => 'This is my description 3',
            'price' => 600,
            'created_at' => now(), // Manual assignment required
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Product Created Successfully !'], 201);
    }

    public function create4(Request $request)
    {
        // to access to body request
        $name_body = $request->body_name;
        $description_body = $request->body_description;
        $price_body = $request->body_price;

        // another way to read from body request
        $name_body2 = $request->input('body_name', 'default value');

        $obj = new Product;
        $obj->name = $name_body;
        $obj->description = $description_body;
        $obj->price = $price_body;
        $obj->save();

        Product::create([
            'name' => $name_body,
            'description' => $description_body,
            'price' => $price_body,
        ]);

        return response()->json(['message' => 'Product Created Successfully !'], 201);

    }

    public function create5(Request $request)
    {
        Product::create($request->all());

        return response()->json(['message' => 'Product Created Successfully !'], 201);

    }

    public function update1($id)
    {
        $row = Product::findOrFail($id);
        $row->name = 'Product 6';
        $row->description = 'Description updated';
        $row->price = 500;
        $row->save();

        return response()->json(['message' => 'Product updated Successfully !'], 201);

    }

    public function massUpdate()
    {
        Product::where('price', 600)->update(['description' => 'high cost']);

        return response()->json(['message' => 'Products updated Successfully !'], 201);

    }

    public function update2($id, Request $request)
    {
        $row = Product::findOrFail($id);
        $row->name = $request->name;
        $row->description = $request->description;
        $row->price = $request->price;
        $row->save();

        return response()->json(['message' => 'Product updated Successfully !'], 201);

    }

    public function update3($id, Request $request)
    {
        $row = Product::findOrFail($id);
        $row->fill($request->all());
        if ($row->isClean()) {
            return 'no data updated';
        }
        $row->save();

        return response()->json(['message' => 'Producttttttttttttttttt updated Successfully !'], 200);

    }

    public function createOrUpdate($id)
    {
        Product::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'name' => 'updated from create or update',
                'description' => 'updated',
                'price' => 200,
            ]
        );

        return 'ok';
    }

    public function duplicate($id)
    {

        $row = Product::find($id);
        $row2 = $row->replicate();
        $row2->save();

        return 'ok duplicated';
    }

    public function delete($id)
    {
        $row = Product::findOrFail($id);
        $row->delete();

        return 'deleted';
    }

    public function massDelete(){
        Product::where('price','>',500)->delete();
        return "rows deleted";
    }
}
