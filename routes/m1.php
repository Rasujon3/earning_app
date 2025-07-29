<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Author: Sujon


//products
Route::resource('products', ProductController::class);
