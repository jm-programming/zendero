<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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
    $posts = App\Models\Post::all();
    return view('welcome', compact('posts'));
});

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);

Route::prefix('admin')->namespace('admin')->middleware('auth')->group(function () {
    
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');

    Route::get('/posts', [App\Http\Controllers\admin\PostsController::class, 'index'])->name('admin.posts.index');    
});

