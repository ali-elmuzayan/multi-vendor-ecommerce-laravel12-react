<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
/***
 * Notes:
 *  - each route name in this file is prefixed with 'admin.'
 */


Route::get('/dashboard', DashboardController::class)->name('dashboard');
