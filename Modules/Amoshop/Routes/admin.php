<?php

use Modules\Amoshop\Controllers\CartController;
use Modules\Amoshop\Controllers\OrderController;
use Modules\Amoshop\Models\Order;
use Modules\Amoshop\Models\CartItem;

Route::get('/orders', function () { return view('Amoshop.Views.admin.orders'); })->name('admin.orders');
Route::delete('/orders/delete/{id}', [OrderController::class, 'destroy'])->name('admin.orders.delete');
Route::post('/orders/update/{id}', [OrderController::class, 'update'])->name('admin.orders.update');
Route::get('/order_details/{id}', function ($id) { 
    $order = Order::find($id);
    return view('Amoshop.Views.admin.order_details', compact(['order']));
})->name('admin.order_details');