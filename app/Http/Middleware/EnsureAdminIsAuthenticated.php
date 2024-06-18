<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EnsureAdminIsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            if(Auth::user()->id_peran == 1){
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('/login');
            }
        }
        else
        {
            Auth::logout();
            return redirect()->route('/login');
        }

        // if (!Auth::check()) {
        //     // Redirect to login page if user is not authenticated
        //     return redirect()->route('login');
        // }

        // return $next($request);
    }
}


