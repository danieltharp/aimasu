<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GetAndSetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(Request): (Response) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(is_null(session('locale'))) {
            session(['locale' => config('app.locale')]);
        }
        app()->setLocale(session('locale'));
        return $next($request);
    }
}
