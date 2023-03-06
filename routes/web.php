<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//-----------------------------------------------

// Admin Routes:

Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('article', AdminArticleController::class);
});

Route::post('/store-posts', AdminArticleController::class . '@store')->name('store-posts');



Route::resources([
    'article' => ArticleController::class,
    // 'category' => CategoryController::class,
]);

// Home Route
Route::resource('/', ArticleController::class);

// Route::get('categories', CategoryController::class, 'index');


Route::get('/category/{category:slug}', function (Request $id) {
    // return view('category');
    return Category::where('id', $id->id)->get();
})->name('category');


Route::get('/about', function () {
    return view('about');
});

Route::get('/single/{id}', [ArticleController::class, 'show']);


Route::get('/admin/{page}', [ArticleController::class, 'routing']);


Route::get('/posts/{id}', function ($id) {
    return response("Post number: " . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return $request->name . ' ' . $request->lastname;
});





// login route:

Route::get('/login', function (Request $request) {
});

// editor route:
Route::get('/editor', function () {
    return view('admin.article.edit');
})->name('editor');
