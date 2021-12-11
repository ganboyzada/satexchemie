<?php

namespace Modules\Amoshop\Controllers;

use Illuminate\Http\Request;
use Modules\Amoshop\Models\Order;
use Intervention\Image\Facades\Image;
use GuzzleHttp\Client;

class KapitalPGController extends Controller
{
    function createOrder($order_id, $amount = 5000){
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
                <TKKPG>
                    <Request>
                            <Operation>CreateOrder</Operation>
                            <Language>'.session("locale").'</Language>
                            <Order>
                                    <OrderType>Purchase</OrderType>
                                    <Merchant>E1000010</Merchant>
                                    <Amount>'.$amount.'</Amount>
                                    <Currency>944</Currency>
                                    <Description>xxxxxxxx</Description>
                                    <ApproveURL>'.url('/pg/orders/payment-success?order_id='.$order_id).'</ApproveURL>
                                    <CancelURL>/testshopPageReturn.jsp</CancelURL>
                                    <DeclineURL>/testshopPageReturn.jsp</DeclineURL>
                            </Order>
                    </Request>
                </TKKPG>';

        $url = 'https://e-commerce.kapitalbank.az:5443/Exec';

        $options = [
            'headers' => [
                'Content-Type' => 'text/xml; charset=UTF8',
                'Accept' => 'application/xml'
            ],
            'body' => $xml,
            'cert' => [app_path('KapitalPG/natura.crt'), 'natura_llc'],
            'ssl_key' => [app_path('KapitalPG/natura_llc.key'), 'natura_llc'],
            'verify' => false
        ];

        $client = new Client();
        $response = $client->request('POST', $url, $options);
        $response = $response->getBody()->getContents();

        $encode_response = json_encode(simplexml_load_string($response));   
        $decode_response = json_decode($encode_response, true);
        
        $order_id = $decode_response['Response']['Order']['OrderID'];
        $session_id = $decode_response['Response']['Order']['SessionID'];

        return $this->redirectToPG($order_id, $session_id);

    }

    function redirectToPG($order_id, $session_id){
        return redirect('https://e-commerce.kapitalbank.az/index.jsp?ORDERID='.$order_id.'&SESSIONID='.$session_id);
    }

    function paymentSuccess(Request $request){
        if(OrderController::orderPaymentSuccess($request->order_id)){
            return view('frontend.pages.index');
        };
    }

    function getOrderStatus($order_id = null, $session_id = null){
        if($order_id == null){
            $order_id = '34303815';
        }

        if($session_id == null){
            $session_id = 'BA5C7DB15668E29305CC0C393D0ED2D7';
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>
                <TKKPG>
                    <Request>
                        <Operation>GetOrderStatus</Operation>
                        <Language>'.session("locale").'</Language>
                        <Order>
                            <Merchant>E1000010</Merchant>
                            <OrderID>'.$order_id.'</OrderID>
                        </Order>
                        <SessionID>'.$session_id.'</SessionID>
                    </Request>
                </TKKPG>';

        $url = 'https://e-commerce.kapitalbank.az:5443/Exec';

        $options = [
            'headers' => [
                'Content-Type' => 'text/xml; charset=UTF8',
                'Accept' => 'application/xml'
            ],
            'body' => $xml,
            'cert' => [app_path('KapitalPG/natura.crt'), 'natura_llc'],
            'ssl_key' => [app_path('KapitalPG/natura_llc.key'), 'natura_llc'],
            'verify' => false
        ];

        $client = new Client();
        $response = $client->request('POST', $url, $options);
        $response = $response->getBody()->getContents();

        $encode_response = json_encode(simplexml_load_string($response));   
        $decode_response = json_decode($encode_response, true);

        $order_status = $decode_response['Response']['Order']['OrderStatus'];

        return $order_status;
    }

}