<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TelescopeAccess
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $request->user();

            return $next($request);
        }

        return redirect('/');
    }
}
