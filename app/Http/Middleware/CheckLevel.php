<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request  $request
     * @param \Closure  $next
     * @param string  $level
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if ($request->user() && $request->user()->level !== $level) {
            abort(403, 'Unauthorized');
        }
        
        return $next($request);
    }
    
}
