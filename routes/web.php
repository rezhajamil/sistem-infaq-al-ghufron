<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\JadwalJumatController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\TransactionController;
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

Route::resource('/', HomeController::class);
Route::resource('checkout', CheckoutController::class);
Route::post('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

// Route::get('/dashboard', function () {
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('transaction', KasController::class);
    Route::resource('activity', KegiatanController::class);
    Route::resource('jumat', JadwalJumatController::class);
    Route::resource('infaq', InfaqController::class);
    Route::get('print/kas', [KasController::class, 'print'])->name('transaction.print');
});

require __DIR__ . '/auth.php';
