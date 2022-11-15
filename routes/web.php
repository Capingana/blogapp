<?php

use App\Http\Controllers\products\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'middleware' => [],
    'prefix' => 'products'
], function () {
    Route::resource("/", ProductsController::class);
});
