<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

// Route::get('/reports/monthly', [ReportController::class, 'showMonthlyReport']);
//new /latest ver
// Route::get('/', [ReportController::class, 'showMonthlyReport']);
Route::get('/', [ReportController::class, 'showReports'])->name('reports');


//Route::get('/reports/monthly', [ReportController::class, 'showMonthlyReport']);
// Route::get('/reports/monthly', [ReportController::class, 'showMonthlyReport'])->name('reports.monthly');

// Route::get('/', function () {
//     return view('report');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
