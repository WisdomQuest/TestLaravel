<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLocalhost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        if($request->ip()=='127.0.0.1') return $next($request);
//        return redirect('404');
//        abort(404);

        if ($request->input('key') === '123456') {
            return $next($request);
        }
        abort(404);

    }
}
