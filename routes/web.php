<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseholdController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [HouseholdController::class, 'dashboard'])->name('dashboard');
    Route::resource('/users', UserController::class);
    Route::resource('/permission', PermissionController::class);
    Route::resource('/report', ReportController::class);
    Route::get('/households', [HouseholdController::class, 'index']);
    Route::get('/households/data', [HouseholdController::class, 'dataUpload']);
    Route::post('/households/data', [HouseholdController::class, 'dataUpload']);
    Route::get('/households/download-excel', [HouseholdController::class, 'downloadExcel']);

    // Ajax Calls
    Route::get('/households/sidebar/{id}', [HouseholdController::class, 'demoAjax']);
});
