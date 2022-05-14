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

Route::get('/', function () {
    return view('accueil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact_send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact_send');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/edit-capsule/{id}', [App\Http\Controllers\CapsuleController::class, 'index'])->name('edit-capsule');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
});
