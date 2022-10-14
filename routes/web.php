<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HasOneThroughtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TitleController;
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

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
Route::get('/title', [TitleController::class, 'index'])->name('title.index');
 Route::get('/home', [HomeController::class, 'index'])->name('home.index');
 Route::get('/hasone', [HasOneThroughtController::class, 'index'])->name('hasone.index');

