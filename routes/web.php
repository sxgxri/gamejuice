<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
    Route::get('/art', 'ArticleController')->name('articles.index');
});
Route::group(['namespace' => 'App\Http\Controllers\Post', 'prefix'=>'posts'], function () {
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/{post}', 'ShowController')->name('post.show');
    Route::group(['namespace' => 'Comment' , 'prefix' => '{post}/comments' ], function (){
        Route::post('/', 'StoreController')->name('post.comment.store');
    });
    Route::group(['namespace' => 'Like' , 'prefix' => '{post}/likes' ], function (){
        Route::post('/', 'StoreController')->name('post.like.store');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Article', 'prefix'=>'articles'], function () {
    Route::get('/', 'IndexController')->name('article.index');
    Route::get('/{article}', 'ShowController')->name('article.show');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Main', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.index');
});
Route::group(['namespace' => 'App\Http\Controllers\Admin\Post', 'prefix' => 'admin/posts', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.post.index');
    Route::get('/create', 'CreateController')->name('admin.post.create');
    Route::post('/', 'StoreController')->name('admin.post.store');
    Route::get('/{post}', 'ShowController')->name('admin.post.show');
    Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
    Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
    Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Category', 'prefix' => 'admin/categories' , 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.category.index');
    Route::get('/create', 'CreateController')->name('admin.category.create');
    Route::post('/', 'StoreController')->name('admin.category.store');
    Route::get('/{category}', 'ShowController')->name('admin.category.show');
    Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
    Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
    Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Tag', 'prefix' => 'admin/tags' , 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.tag.index');
    Route::get('/create', 'CreateController')->name('admin.tag.create');
    Route::post('/', 'StoreController')->name('admin.tag.store');
    Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
    Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
    Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
    Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\User', 'prefix' => 'admin/users' , 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.user.index');
    Route::get('/create', 'CreateController')->name('admin.user.create');
    Route::post('/', 'StoreController')->name('admin.user.store');
    Route::get('/{category}', 'ShowController')->name('admin.user.show');
    Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
    Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
    Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
});



Route::group(['namespace' => 'App\Http\Controllers\Personal\Main', 'prefix' => 'personal' , 'middleware' => ['auth', 'user']], function () {
    Route::get('/', 'IndexController')->name('personal.main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal\Liked', 'prefix' => 'personal/liked' , 'middleware' => ['auth', 'user']], function () {
    Route::get('/', 'IndexController')->name('personal.liked.index');
    Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal\Comment', 'prefix' => 'personal/comment' , 'middleware' => ['auth', 'user']], function () {
    Route::get('/', 'IndexController')->name('personal.comment.index');
    Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
    Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
    Route::delete('/{comment}', 'DeleteController')->name('personal.comment.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Article', 'prefix' => 'admin/articles', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.article.index');
    Route::get('/create', 'CreateController')->name('admin.article.create');
    Route::post('/', 'StoreController')->name('admin.article.store');
    Route::get('/{article}', 'ShowController')->name('admin.article.show');
    Route::get('/{article}/edit', 'EditController')->name('admin.article.edit');
    Route::patch('/{article}', 'UpdateController')->name('admin.article.update');
    Route::delete('/{article}', 'DeleteController')->name('admin.article.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Artcategory', 'prefix' => 'admin/artcategories' , 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.artcategory.index');
    Route::get('/create', 'CreateController')->name('admin.artcategory.create');
    Route::post('/', 'StoreController')->name('admin.artcategory.store');
    Route::get('/{artcategory}', 'ShowController')->name('admin.artcategory.show');
    Route::get('/{artcategory}/edit', 'EditController')->name('admin.artcategory.edit');
    Route::patch('/{artcategory}', 'UpdateController')->name('admin.artcategory.update');
    Route::delete('/{artcategory}', 'DeleteController')->name('admin.artcategory.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Arttag', 'prefix' => 'admin/arttags' , 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.arttag.index');
    Route::get('/create', 'CreateController')->name('admin.arttag.create');
    Route::post('/', 'StoreController')->name('admin.arttag.store');
    Route::get('/{arttag}', 'ShowController')->name('admin.arttag.show');
    Route::get('/{arttag}/edit', 'EditController')->name('admin.arttag.edit');
    Route::patch('/{arttag}', 'UpdateController')->name('admin.arttag.update');
    Route::delete('/{arttag}', 'DeleteController')->name('admin.arttag.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/about', 'main.about')->name('about.index');
