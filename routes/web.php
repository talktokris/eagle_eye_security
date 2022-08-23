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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('landing');
Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'aboutUs'])->name('about-us');
Route::get('/new-gurads-arrival', [App\Http\Controllers\PagesController::class, 'newArrival'])->name('new-gurads-arrival');
Route::get('/licenses-certificates', [App\Http\Controllers\PagesController::class, 'licenses'])->name('licenses-certificates');
Route::get('/management', [App\Http\Controllers\PagesController::class, 'management'])->name('management');
Route::get('/trademark', [App\Http\Controllers\PagesController::class, 'trademark'])->name('trademark');
Route::get('/our-customers', [App\Http\Controllers\PagesController::class, 'customers'])->name('our-customers');
Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');
Route::get('/objectives', [App\Http\Controllers\PagesController::class, 'objectives'])->name('objectives');
Route::get('/gallery', [App\Http\Controllers\PagesController::class, 'gallery'])->name('gallery');
Route::get('/training', [App\Http\Controllers\PagesController::class, 'training'])->name('training');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');