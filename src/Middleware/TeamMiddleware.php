<?php

namespace OutMart\Team\Middleware;

use Closure;
use Illuminate\Http\Request;

class TeamMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $permission = false)
    {
        $membership = $request->user()->membership;

        abort_if(!$membership, 404);

        if (in_array('*', $membership->rule->permissions)) {
            return $next($request);
        }

        abort_if(!in_array($permission, $membership->rule->permissions), 401);

        return $next($request);
    }
}
