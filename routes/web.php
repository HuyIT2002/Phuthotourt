<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/bai-viet', [PostController::class, 'index'])->name('bai-viet');
// Route::get('/bai-viet', [PostController::class, 'fillter'])->name('bai-viet');
Route::get('/chi-tiet-bai-viet', function () {
    return view('bai-viet.chi-tiet-bai-viet');
})->name('chi-tiet-bai-viet');

Route::get('/tai-lieu', function () {
    return view('tai-lieu.tai-lieu');
})->name('tai-lieu');

Route::get('/tuyen-dung', [CategoryController::class, 'index'])->name('tuyen-dung');
Route::get('/search-categories', [CategoryController::class, 'searchCategories']);
Route::get('/chi-tiet-tuyen-dung/{id}', [JobController::class, 'show'])->name('chi-tiet-tuyen-dung');
Route::post('/upload', [JobController::class, 'upload'])->name('upload');