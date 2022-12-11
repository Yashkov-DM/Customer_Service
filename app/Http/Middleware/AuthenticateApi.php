<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateApi extends Middleware {

    public function handle($request, Closure $next, ...$guards) {
        $token = $request->bearerToken();

        if (!$token || !in_array($token, config('apitokens'))) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        return $next($request);
    }
}
