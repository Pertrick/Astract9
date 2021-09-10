<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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

         if (Auth::guest() ){
            return redirect()->route('home');
        }

        else if(!auth()->user()->admin){
            return redirect()->route('home');
        }

        
        return $next($request);
    }
}
