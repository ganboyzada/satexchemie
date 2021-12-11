<?php

namespace Modules\Amoshop\Controllers;

use Illuminate\Http\Request;
use Modules\Amoshop\Models\Order;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;
use Intervention\Image\Facades\Image;

class OrderController extends Controller
{
    public function update(Request $request, $id)
    {
        $item = Order::find($id);
        $item->status = $request->status;
        $item->save();
        return back()->with('alert', 'Content is saved');
    }

    public function destroy($id)
    {
        $item = Order::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }

    public static function orderPaymentSuccess($id){
        $order = Order::find($id);

        $order->paid = true;
        $order->save();

        return true;
    }

    static function storeOrderInCRM($order){
        $accessToken = ApiController::getAccess();

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$accessToken,
        ])->post('https://crm.amotech.tech/api/orders/store?order='.json_encode($order));
    }
}