<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
})->name('home');
Route::get('/bai-viet', function () {
    return view('bai-viet.bai-viet');
})->name('bai-viet');
Route::get('/chi-tiet-bai-viet', function () {
    return view('bai-viet.chi-tiet-bai-viet');
})->name('chi-tiet-bai-viet');

Route::get('/tai-lieu', function () {
    return view('tai-lieu.tai-lieu');
})->name('tai-lieu');

Route::get('/tuyen-dung', [CategoryController::class, 'index'])->name('tuyen-dung');
Route::get('/search-categories', [CategoryController::class, 'searchCategories']);



Route::get('/chi-tiet-tuyen-dung', function () {
    return view('tuyen-dung.chi-tiet-tuyen-dung');
})->name('chi-tiet-tuyen-dung');