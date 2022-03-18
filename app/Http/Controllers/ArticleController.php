<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(Article $article)
    {
        $article = Article::all();
        return view('layouts/articles/articles', compact('article'));

    }

    public function create()
    {
        return view('layouts.articles.create');
    }


    public function store(Request $request)
    {
        Article::create([
            'title'=>$request->title,
            'content'=>$request->contents,
        ]);
        $message = 'article created successfully';
        return redirect()-> route('articles', compact('message'));
    }


    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('layouts.articles.edit',compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->contents;
        $article->save();

        return redirect()->route('articles');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('articles');
    }
}
