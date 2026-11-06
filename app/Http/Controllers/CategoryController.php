<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $data = Category::all();
        return view('category.list',compact('data'));
    }

    public function add(){
        return view('category.add');
    }

    public function store(Request $request){
        // validation in backend
        $request->validate([
           'name'=>'required|same:name2',
           'description'=>'required|min:10'
        ],[
            'required' => "The :attribute field is mandatory.",
        ]);
        Category::create($request->all());
        return redirect()->route('list-category');
    }

    public function show($id){
        $data = Category::findOrFail($id);
        return view('category.show',compact('data'));
    }

    public function delete($id){
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->route('list-category');
    }

    public function edit($id){
        $data = Category::findOrFail($id);
        return view('category.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'description'=>'required|min:10'
        ]);

        $data = Category::findOrFail($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('list-category');

    }
}
