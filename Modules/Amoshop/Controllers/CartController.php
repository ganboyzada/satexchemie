<?php

namespace Modules\Amoshop\Controllers;

use Modules\Amoshop\Models\CartItem;
use App\Models\Project;
use Modules\Amoshop\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\Checkout\CheckoutRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function add(Request $request)
    {
        if(Auth::check()){
            if(Auth::user()->role == 'customer'){
                
                $eq_item = CartItem::where('customer_id', Auth::id())->where('product_id', $request->id)->first();

                if($eq_item){
                    $prev_quantity = $eq_item->quantity;
                    $eq_item->quantity = $prev_quantity + $request->quantity;

                    $eq_item->save();   
                } else{
                    $cart_item = new CartItem;
                    $cart_item->customer_id = Auth::id();
                    $cart_item->product_id = $request->id;
                    $cart_item->quantity = $request->quantity;

                    $cart_item->save();
                }
            }
        } else{
            if(session()->has('cart_items')){
                $session_cart = session('cart_items');

                $item_exists = false;

                foreach($session_cart as $k=>$item){
                    if($item['product_id'] == $request->id){
                        $session_cart[$k]['quantity'] = $item['quantity'] + $request->quantity;
                        $item_exists = true;
                    }
                }

                if(!$item_exists){
                    $session_cart[] = [
                        'product_id' => $request->id,
                        'quantity' => $request->quantity,
                    ];
                }

                session()->put('cart_items', $session_cart);

            } else{
                session()->put('cart_items', [[
                    'product_id' => $request->id,
                    'quantity' => $request->quantity,
                ]]);
            }
            
        }

        return response()->json(array(
            'status' => true,
            'message' => 'success'
        ));
    }

    public function delete(Request $request)
    {
        if(Auth::check()){
            if(Auth::user()->role == 'customer'){
                CartItem::where('customer_id', Auth::id())->where('product_id', $request->id)->delete();
            }
        } else{
            $session_cart = session('cart_items');
            foreach($session_cart as $k=>$item){
                if($item['product_id'] == $request->id){
                    unset($session_cart[$k]);
                }
            }
            session()->put('cart_items', $session_cart);
        }

        
        return response()->json(array(
            'status' => true,
            'message' => 'success'
        ));
    }

    public function all(){
        if(Auth::check()){
            if(Auth::user()->role == 'customer'){
                $items = CartItem::where('customer_id', Auth::id())->get();

                $products = [];

                foreach($items as $item){
                    $products[] = Project::where('id', $item->product_id)->first();
                }
            }

            $from = 'db';
        } else{
            $items = session('cart_items');
            $products = [];

            foreach($items as $item){
                $products[] = Project::where('id', $item['product_id'])->first();
            }

            $from = 'session';
        }

            return response()->json(array(
                'status' => true,
                'message' => 'success',
                'from' => $from,
                'items' => $items,
                'products' => $products,
            ));
    }

    public function getlist(){
        if(Auth::check()){
            if(Auth::user()->role == 'customer'){
                $items = CartItem::where('customer_id', Auth::id())->get();
                $count = 0;

                foreach($items as $item){
                    $count += $item->quantity;
                }
            }

        }else{
            $items = session('cart_items');
            $count = 0;

            foreach($items as $item){
                $count += $item['quantity'];
            }
        }

        $returnHTML = view('Amoshop.Views.frontend.components.cart_items')->render();
        
        return response()->json(array('message' => 'success', 'html'=>$returnHTML, 'count'=>$count));
    }

    public function updateQuantity(Request $request){
        if(Auth::check()){
            if(Auth::user()->role == 'customer'){

                $item = CartItem::where('customer_id', Auth::id())->where('product_id', $request->id)->first();
                $item->quantity = $request->quantity;

                $item->save();
            }
        }else{
            $items = session('cart_items');
            
            foreach($items as $k=>$item){
                if($item['product_id'] == $request->id){
                    $items[$k]['quantity'] = $request->quantity;
                }
            }
            
            session()->put('cart_items', $items);
        }

        return response()->json(array('message' => 'success'));
    }

    public function checkout(CheckoutRequest $request)
    {

        if(Auth::check()){
            if(Auth::user()->role == 'customer'){
                
                    $item = new Order;
                    $item->customer_id = Auth::id();
                    $item->total = $request->total;
     
                    $products = CartItem::select(['product_id', 'quantity'])->where('customer_id', Auth::id())->get();
                    $item->products = json_encode($products);

                    $total = 0;

                    foreach($products as $cart_item){
                        $temp_product = Project::find($cart_item->product_id); 
                        $total += $temp_product->price * $cart_item->quantity;
                    }
    
                    $item->name = $request->name;
                    $item->surname = $request->surname;
                    $item->email = $request->email;
                    $item->phone = $request->phone;
                    $item->address = $request->address;
                    $item->owner = 'satex';

                    $item->type = $request->payment_type;
                    $item->total = $total;
                    
                    if($request->payment_type == 'cash'){
                        $item->save();
                        // CartItem::where('customer_id', Auth::id())->delete();
                    } else if($request->payment_type == 'credit_card'){
                        $item->save();

                        OrderController::storeOrderInCRM($item);

                        $pg = new KapitalPGController();
                        return $pg->createOrder($item->id, $item->total);
                        // CartItem::where('customer_id', Auth::id())->delete();
                    }  
            }
        } 
        else{
            
                $item = new Order;
                $item->customer_id = 0;
                $item->total = $request->total;
    
                $products = session('cart_items');

                $total = 0;

                foreach(session('cart_items') as $cart_item){
                    $temp_product = Project::find($cart_item['product_id']); 
                    $total += $temp_product->price * $cart_item['quantity'];
                }

                $item->products = json_encode($products);
    
                $item->name = $request->name;
                $item->surname = $request->surname;
                $item->email = $request->email;
                $item->phone = $request->phone;
                $item->address = $request->address;
                $item->owner = 'satex';
                
                $item->type = $request->payment_type;
                $item->total = $total;
    
                if($request->payment_type == 'cash'){
                    $item->save();
                    // CartItem::where('customer_id', Auth::id())->delete();
                } else if($request->payment_type == 'credit_card'){
                    $item->save();
                    
                    OrderController::storeOrderInCRM($item);

                    $pg = new KapitalPGController();
                    return $pg->createOrder($item->id, $item->total);
                    // CartItem::where('customer_id', Auth::id())->delete();
                } 
        
        }

    }
}
