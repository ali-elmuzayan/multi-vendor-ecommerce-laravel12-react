<?php

use Illuminate\Support\Facades\Route;
/***
 * Notes:
 *  - each route name in this file is prefixed with 'vendor.'
 */

Route::get('/dashboard', function () {
    return 'vendor dashboard';
})->name('dashboard');
