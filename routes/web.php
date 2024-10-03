<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('dashboard.dashboard_v1');
});

Route::prefix('company')->group(function () {
    Route::controller(CompanyController::class)->group(function () {
        Route::get('/add_company', 'index');
    });
});
