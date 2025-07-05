<?php

use App\Http\Controllers\Vendor\DashboardController;
use Illuminate\Support\Facades\Route;
/***
 * Notes:
 *  - each route name in this file is prefixed with 'vendor.'
 */

Route::get('/dashboard', DashboardController::class)->name('dashboard');
