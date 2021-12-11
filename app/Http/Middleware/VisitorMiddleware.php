<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VisitorMiddleware
{

    public function handle($request, Closure $next)
    {
        $visitor = new \App\Models\Visitor;
        $visitor->ip = $request->ip();
        $visitor->timestamp = now();
        
        $visitor->save();
        
        return $next($request);
    }
}
