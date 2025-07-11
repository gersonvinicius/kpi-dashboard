<?php

use App\Http\Controllers\Api\V1\KpiController;

Route::prefix('v1')->group(function () {
    Route::get('/kpis', [KpiController::class, 'index']);
});