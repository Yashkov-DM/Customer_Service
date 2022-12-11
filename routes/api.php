<?php

use App\Http\Controllers\Management\SupportServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth_api')->group(function () {
    Route::get('order/support', [SupportServiceController::class, 'support_orders']);
    Route::get('order/support/{id}', [SupportServiceController::class, 'support_order']);
    Route::post('order/support', [SupportServiceController::class, 'support_order_create']);
    Route::put('order/support', [SupportServiceController::class, 'support_order_update']);
    Route::delete('order/support/{id}', [SupportServiceController::class, 'support_order_delete']);
});

