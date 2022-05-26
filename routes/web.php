<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoletinController;
use App\Http\Controllers\ContactController;

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
    return view('index');
});

Route::get('/boletinsub', [BoletinController::class, 'store'])->name('boletin.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contactstore', [ContactController::class, 'store'])->name('contact.store');
