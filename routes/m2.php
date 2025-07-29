<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// Author: Ekram vai
Route::get('/', [IndexController::class, 'loginPage']);
