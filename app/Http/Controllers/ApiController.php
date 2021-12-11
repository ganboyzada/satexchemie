<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class ApiController extends Controller
{

    public static function getAccess(){
        $token_expired = true;
    
        if(session()->has('api_token')){
            if(time() < session('api_token')['expire_date']){
                $accessToken = session('api_token')['token'];
                $token_expired = false;
            }
        } 

        if($token_expired){
            $response = Http::asForm()->post('https://crm.amotech.tech/oauth/token', [
                'grant_type' => 'password',
                'client_id' => '5',
                'client_secret' => 'GTSHIZKzxOtTACa0DWD5Xw0yQGoQiR2DxAYn5GQk',
                'username' => 'ganboyzada@gmail.com',
                'password' => 'vghng_3799',
                'scope' => '',
            ]);
            
            $accessToken = $response->json()['access_token'];
            $expiresIn = $response->json()['expires_in'];
            $createDate = time();
            session()->put('api_token', ['create_date' => $createDate, 'token' => $accessToken, 'expire_date' => $expiresIn + $createDate]);
        }

        return $accessToken;
    }
}
