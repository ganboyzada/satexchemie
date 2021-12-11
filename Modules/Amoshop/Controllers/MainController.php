<?php

namespace Modules\Amoshop\Controllers;

use Illuminate\Http\Request;
use Modules\Amoshop\Models\Order;
use Modules\Amoshop\Models\CartItem;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function account(){
        $user = Auth::user();

        $orderQuery = Order::where('customer_id', $user->id);

        $active_orders = Order::where('customer_id', $user->id)->where('status', 2)->get();
        $past_orders = Order::where('customer_id', $user->id)->where('status', 3)->get();
        $pending_orders = Order::where('customer_id', $user->id)->where('status', 1)->get();

        return view('Amoshop.Views.frontend.account', compact(['user', 'active_orders', 'past_orders', 'pending_orders']));
    }
}