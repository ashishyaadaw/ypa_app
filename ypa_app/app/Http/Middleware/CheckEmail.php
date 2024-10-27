<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $allowedEmails = [
            'ashishyaadaw@gmail.com',
            'allowed2@example.com',
            'allowed3@example.com',
        ];

        if (Auth::check() && in_array(Auth::user()->email, $allowedEmails)) {
            return $next($request);
        }

        return redirect('login'); // Redirect to an unauthorized page
    }
}
