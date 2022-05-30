<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoletinController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;

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
Route::post('/boletinstore', [BoletinController::class, 'store'])->name('boletin.store');
Route::get('/login', [AuthController::class, 'indexlogin'])->name('auth.login');
Route::get('/register', [AuthController::class, 'indexredirect'])->name('auth.redirect');
Route::get('/register/casual', [AuthController::class, 'indexregister'])->name('register.casual');
Route::get('/register/comprometido', [AuthController::class, 'indexregister'])->name('register.comprometido');
Route::get('/register/aficionado', [AuthController::class, 'indexregister'])->name('register.aficionado');
Route::post('/register/registered', [AuthController::class, 'store'])->name('auth.store');
Route::get('/register/verify', [AuthController::class, 'verify'])->name('auth.verify');
Route::post('/register/verify/code', [AuthController::class, 'verifycode'])->name('auth.verifycode');
