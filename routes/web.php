<?php

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

// NEWS

Route::get('/', function () {
    return view('news.create');
});

Route::post("/news/store","AdminController@store")->name("storenews");

// CATEGORY

Route::get('/category/create', 'AdminController@createCategory');

Route::post("/category/store","AdminController@storeCategory")->name("storecategory");


Auth::routes();

