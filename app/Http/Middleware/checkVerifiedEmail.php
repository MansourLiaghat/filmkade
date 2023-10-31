<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkVerifiedEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->hasverifiedemail()){
            return $next($request);
        }
        return redirect()->route('videos.index')->with('alert' , __('messages.please_check_verified_email'));
    }
}
