<?php

use Modules\Amoshop\Controllers\CartController;
use Modules\Amoshop\Controllers\KapitalPGController;
use Modules\Amoshop\Controllers\OrderController;
use Modules\Amoshop\Controllers\MainController;
use Modules\Amoshop\Models\Order;
use Modules\Amoshop\Models\CartItem;

Route::get('/cart/getlist', [CartController::class, 'getlist'])->name('cart.getlist');
Route::get('/cart/checkout', function () {
    if(Auth::check()){
        if(Auth::user()->role == 'customer'){
            $cart_items = CartItem::where('customer_id', Auth::id())->get();
            if(empty($cart_items)){
                return route('home');
            }
            $session_retrieve = 0;
        }
    } else{
        $cart_items = session('cart_items');
        if(empty($cart_items)){
            return route('home');
        }
        $session_retrieve = 1;
    }
    return view('frontend.pages.checkout', compact(['cart_items', 'session_retrieve'])); 
});
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.update_quantity');

Route::get('/pg/orders/create/{order_id}', [KapitalPGController::class, 'createOrder'])->name('pg.order.create');
Route::post('/pg/orders/payment-success', [KapitalPGController::class, 'paymentSuccess'])->name('pg.order.success');
Route::get('/pg/orders/{order_id}/get-status', [KapitalPGController::class, 'getOrderStatus'])->name('pg.order.status');

Route::get('/my-account', [MainController::class, 'account'])->name('account');