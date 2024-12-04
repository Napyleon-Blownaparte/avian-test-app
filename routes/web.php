<?php

use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customers.purchases.create', ['customer' => 1]);
});

Route::get('/purchases', [PurchaseController::class, 'index'])->name('purchases.index');
Route::resource('customers.purchases', PurchaseController::class)->only('create', 'store')->shallow();
