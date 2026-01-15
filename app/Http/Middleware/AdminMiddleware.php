<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // belum login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // bukan admin
        if (auth()->user()->role !== 'admin') {
            abort(403, 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}