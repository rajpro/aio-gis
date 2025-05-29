<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseholdController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InvoiceController;

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
    Route::post('/households/download-excel', [HouseholdController::class, 'downloadExcel']);
    Route::get('/households/view/{id}', [HouseholdController::class, 'view']);
    Route::get('/households/status/{status}', [HouseholdController::class, 'status']);
    Route::get('/households/downloadzip/{status}', [HouseholdController::class, 'downloadDocumentZip']);
    Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('/invoice/create', [InvoiceController::class, 'create'])->name('invoice.create');
    Route::get('/invoice/ticket', [InvoiceController::class, 'ticket'])->name('invoice.ticket');
    Route::get('/invoice/document', [InvoiceController::class, 'document']);
    Route::get('/survey', [InvoiceController::class, 'survey']);
    Route::post('/invoice/document', [InvoiceController::class, 'document']);

    // Ajax Calls
    Route::get('/households/sidebar/{string}/{id}', [HouseholdController::class, 'demoAjax']);
});
