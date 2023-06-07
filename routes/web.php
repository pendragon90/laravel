<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', [Blog::class, 'index']);
Route::get('blog/create', [Blog::class, 'create']);
Route::get('blog/{id}', [Blog::class, 'show']);
Route::post('blog', [Blog::class, 'store']);
Route::get('blog/{id}/edit', [Blog::class, 'edit']);
Route::delete('blog/{id}', [Blog::class, 'destroy']);