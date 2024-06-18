<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAuthenticated
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
        // Jika pengguna sudah terotentikasi
        if (Auth::check()) {
            // Jika pengguna memiliki peran sesuai dengan peran yang diizinkan
            if (Auth::user()->id_peran == 2) {
                return $next($request);
            } else {
                // Jika tidak, logout dan alihkan ke halaman login
                Auth::logout();
                return redirect()->route('login')->withErrors(['Unauthorized access.']);
            }
        }

        // Jika pengguna tidak terotentikasi, alihkan ke halaman login
        Auth::logout();
        return redirect()->route('login')->withErrors(['You need to log in first.']);
    }
}


// if (!Auth::check()) {
//     // Redirect to login page if user is not authenticated
//     return redirect()->route('login');
// }

// return $next($request);

