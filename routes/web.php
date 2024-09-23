<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/transaction', [TransactionController:: class, 'index' ]);
Route::resource('transactions', TransactionController::class);
Route::put('/transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
