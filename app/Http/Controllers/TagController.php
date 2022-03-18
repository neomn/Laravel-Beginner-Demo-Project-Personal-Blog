<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
     public function index(Tag $tag)
    {
        $tag = Tag::all();
        return view('layouts/tags/manage', compact('tag'));

    }

    public function create()
    {
        return view('layouts/tags/manage');
    }


    public function store(Request $request)
    {
        Category::create([
            'title'=>$request->title,
            'content'=>$request->contents,
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
