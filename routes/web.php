<?php

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

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
    return view('beranda');
});


Route::get('/beranda', function () {
    return view('beranda');
});

Route::resource('/book', BookController::class);
Route::delete('/book/{id}/delete',[BookController::class,'destroy'])->name('book.delete');
Route::post('/book/{id}/update',[BookController::class,'update'])->name('book.update');
Route::get('/book/{id}/isi-formulir',[BookController::class,'isi_form'])->name('book.rent-isi-form');
Route::post('/book/{id}/rent_now',[BookController::class,'rent_now'])->name('book.rent_now');
Route::get('/rent-index',[BookController::class,'rent_index'])->name('rent.index');


Route::resource('/category', CategoryController::class);
Route::delete('/category/{id}/delete',[CategoryController::class,'destroy'])->name('category.delete');
Route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
