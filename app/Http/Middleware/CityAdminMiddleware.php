<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CityAdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('cityadmin')->check()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
