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

    public function store(Request $request)
    {
        Tag::create([
            'title'=>$request->title ,
        ]);
        $message = 'Tag created successfully';
        return redirect()-> route('tags.index', compact('message'));
    }


    public function edit($id)
    {
        return redirect()->route('tags.index', compact('id'));
    }

    public function update(Request $request, $title)
    {
        Tag::where('title',$title)->update([
            'title'=>$request->title,
        ]);
        return redirect()->route('tags.index');
    }

    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect()->route('tags.index');
    }
}
