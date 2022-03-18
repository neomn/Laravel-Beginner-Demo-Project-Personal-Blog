<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(  Category $category )
    {
        $category = Category::all();
        return view('layouts/categories/manage', compact('category'));

    }

    public function store(Request $request){

        Category::create([
            'title'=>$request->title ,
        ]);
        $message = 'Category created successfully';
        return redirect()-> route('categories.index', compact('message'));
    }


    public function edit($id)
    {
        return redirect()->route('categories.index', compact('id'));
    }

    public function update(Request $request, $title)
    {
        Category::where('title',$title)->update([
            'title'=>$request->title,
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}
