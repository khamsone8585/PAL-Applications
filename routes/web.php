<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ourclientController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\heroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;
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
    return view('page.index');
});

Route::get('/admin',[adminController::class, 'index'])->name('admin');
Route::get('/service',[serviceController::class, 'index'])->name('service');
Route::get('/about',[aboutController::class, 'index'])->name('about');
Route::get('/news',[newsController::class, 'index'])->name('news');
Route::get('/contact',[contactController::class, 'index'])->name('contact');
Route::get('/hero',[heroController::class, 'index'])->name('hero');
Route::get('/ourclient',[ourclientController::class, 'index'])->name('ourclient');

//SERVICE
Route::get('/service/edit',[serviceController::class, 'edit'])->name('serviceEdit');
Route::get('/service/create',[serviceController::class, 'create'])->name('serviceCreate');

//ABOUT
Route::get('/about/edit',[aboutController::class, 'edit'])->name('aboutEdit');
//NEWS
Route::get('/news/create',[newsController::class, 'create'])->name('newsCreate');
Route::get('/news/edit',[newsController::class, 'edit'])->name('newsEdit');
//Hero
Route::get('/hero/create',[heroController::class, 'create'])->name('heroCreate');
//OurClient
Route::get('/ourclient/create',[ourclientController::class, 'create'])->name('ourclientCreate');











