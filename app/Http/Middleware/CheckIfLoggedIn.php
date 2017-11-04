<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckIfLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info($request->session()->all());
        $email = $request->session()->get('email');
        Log::info("email " . $email);
        if($email == "" || $email == null) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
