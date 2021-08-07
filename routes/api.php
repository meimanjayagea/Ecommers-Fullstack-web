<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/order')->group(function () {
    Route::get('/order_item/{id}', [OrderItemController::class, 'index']);
    Route::post('/order_item/{id}', [OrderItemController::class, 'store']);
    Route::get('/{order_id}/order_item/edit/{id}', [OrderItemController::class, 'edit']);
    Route::post('/{order_id}/order_item/{id}', [OrderItemController::class, 'update']);
    Route::delete('/{order_id}/order_item/{id}', [OrderItemController::class, 'destroy']);
    Route::get('/order_item/search/{id}', [OrderItemController::class, 'search']);
});

// GET : http: //127.0.0.1:8000/api/order/order_item/1

// POST : http: //127.0.0.1:8000/api/order/order_item/1?order_id=2&produck_id=3&qty=12

// GET : http://127.0.0.1:8000/api/order/1/order_item/edit/7?product_id

// POST : http://127.0.0.1:8000/api/order/1/order_item/7?order_id=1&product_id=2&qty=33

// DELETE : http://127.0.0.1:8000/api/order/1/order_item/7?order_id=1&product_id=2&qty=33

// GET : http://127.0.0.1:8000/api/order/order_item/search/5