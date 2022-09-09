<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wiki/sitemap', function () {
    return view('sitemap');
});

Route::get('/wiki/{page:slug}', function (\App\Models\Page $page) {
   return view('page', compact('page'));
});
