<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\InController;
use App\Http\Controllers\LaporanController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category')->middleware('level:5,4');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/product', [ProductController::class, 'index'])->name('product')->middleware('level:5,4,3');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction')->middleware('level:5,3');
    Route::get('/transaction/create', [TransactionController::class, 'create'])->name('transaction.create');
    Route::post('/transaction/store', [TransactionController::class, 'store'])->name('transaction.store');
    Route::get('/incoming', [InController::class, 'index'])->name('incoming')->middleware('level:4,3');
    Route::get('/incoming/create', [InController::class, 'create'])->name('incoming.create');
    Route::post('/incoming/store', [InController::class, 'store'])->name('incoming.store');
    Route::get('/laporan-stock', [LaporanController::class, 'laporanStock'])->name('laporan.stock')->middleware('level:1,2');
    Route::get('/laporan-transaksi', [LaporanController::class, 'laporanTransaksi'])->name('laporan.transaksi')->middleware('level:1,2');
});

require __DIR__.'/auth.php';
