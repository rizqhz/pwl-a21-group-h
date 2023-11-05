<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', ['endpoint' => 'Dashboard']);
});

Route::get('/admin/karyawan', function () {
    return view('admin.karyawan', ['endpoint' => 'Karyawan']);
});

Route::get('/admin/kredensial', function () {
    return view('admin.kredensial', ['endpoint' => 'Kredensial']);
});

Route::get('/admin/supplier', function () {
    return view('admin.supplier', ['endpoint' => 'Supplier']);
});

Route::get('/admin/produk', function () {
    return view('admin.produk', ['endpoint' => 'Produk']);
});

Route::get('/admin/persediaan', function () {
    return view('admin.persediaan', ['endpoint' => 'Persediaan']);
});

Route::get('/admin/penjualan', function () {
    return view('admin.penjualan', ['endpoint' => 'Penjualan']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
