<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LanguageMiddleware
{

    public function handle($request, Closure $next)
    {
        if(session()->has('locale')){
            app()->setLocale(session('locale'));
        }
        else {
            session()->put('locale', 'az');
            app()->setLocale(session('locale'));
        }
        
        if(!session()->has('sitetheme')){
            session()->put('sitetheme', 'dark');
        }

        return $next($request);
    }
}
