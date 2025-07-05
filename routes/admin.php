<?php

use Illuminate\Support\Facades\Route;
/***
 * Notes:
 *  - each route name in this file is prefixed with 'admin.'
 */


Route::get('/dashboard', function () {
    return 'admin dashboard';
})->name('dashboard');
