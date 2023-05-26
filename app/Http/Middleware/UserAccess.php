<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$allowedRoles): Response
    {
        if(in_array(auth()->user()->roleName, $allowedRoles)){
            return $next($request);
        }
        return response()->json(['You do not have permission to access for this page.']);
    }
}
