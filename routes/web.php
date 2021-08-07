<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\List_ItemController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\productController;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [ProductController::class, 'category'] );
Route::get('/cart', [ProductController::class, 'cart'] );
Route::get('/checkout', [ProductController::class, 'checkout'] );
Route::get('/contact', [ProductController::class, 'contact'] );


//admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isadmin: ADMIN']], function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::resource('/user', UserController::class);
    Route::resource('/product', ProductController::class);

    Route::prefix('/order')->group(function () {
        Route::get('/', [OrderController::class, 'index']);
        Route::get('/create', [OrderController::class, 'create']);
        Route::post('/create', [OrderController::class, 'store']);
        Route::get('/edit/{id}', [OrderController::class, 'edit']);
        Route::post('/edit/{id}', [OrderController::class, 'update']);
        Route::get('/delete/{id}', [OrderController::class, 'destroy']);
        Route::get('/{id}', [List_ItemController::class, 'index']);
        Route::get('/{order_id}/order_item/{id}', [List_ItemController::class, 'edit']);
        Route::post('/{order_id}/order_item/{id}', [List_ItemController::class, 'update']);
        Route::post('/{id}/create', [List_ItemController::class, 'create']);
        Route::get('/{order_id}/order_item/{id}/delete', [List_ItemController::class, 'delete']);
    });
});

Auth::routes();

Route::middleware(['auth:sanctum', 'verified', 'isadmin'])
    ->get('/admin', [IndexController::class, 'index'])->name('admin');