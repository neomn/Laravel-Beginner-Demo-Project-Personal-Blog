<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $category = Category::all();
        return view('layouts/categories/manage', compact('category'));

    }

    public function create()
    {
        return view('layouts.categories.create');
    }


    public function store(Request $request)
    {
        Category::create([
            'title'=>$request->title,
        ]);
        $message = 'article created successfully';
        return redirect()-> route('articles', compact('message'));
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('layouts.articles.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->content = $request->contents;
        $category->save();

        return redirect()->route('articles');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('articles');
    }
}
