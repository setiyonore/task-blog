<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class,'index'])->name('blog.home');
Route::group(['middleware' => ['auth']], function () {
Route::group(['prefix'=>'post'],function(){
    Route::get('/create',[BlogController::class,'create'])->name('post.create');
    Route::post('/store',[BlogController::class,'store'])->name('post.store');
    Route::get('/read/{id}',[BlogController::class,'read'])->name('post.read');
    Route::get('/edit/{id}',[BlogController::class,'edit'])->name('post.edit');
    Route::post('/update',[BlogController::class,'update'])->name('post.update');
    Route::delete('/destroy/{id}',[BlogController::class,'destroy'])->name('post.destroy');
});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
