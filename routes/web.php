<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Article $article) {
    $article = Article::all();
    return view('welcome' , compact('article'));
});

Route::middleware('auth')->group( function() {
    Route::resource('articles', \App\Http\Controllers\ArticleController::class)
        ->names([
            'index' => 'articles',
            'create' => 'create',
        ]);
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('tags', \App\Http\Controllers\TagController::class);
});

Route::get('about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    $article = Article::all();
    $articleCount = $article->count();
    return view('dashboard', compact('articleCount'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
