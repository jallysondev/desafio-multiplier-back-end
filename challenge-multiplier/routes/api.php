<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CustomerController::class)
    ->group(function () {
        Route::get('/customer', 'getAll')->name('customers.getAll');
        Route::post('/customer', 'store')->name('customers.store');
        Route::put('/customer/{customer}', 'update')->name('customers.update');
        Route::delete('/customer/{customer}', 'destroy')->name('customers.destroy');
    });


