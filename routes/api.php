<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/wiki/sitemap', function () {
    return \App\Models\Page::wherePublished(true)->latest()->pluck('title', 'slug');
});
Route::get('/wiki/{page:slug}', function (\App\Models\Page $page) {
    return new \App\Http\Resources\PageResource($page);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
