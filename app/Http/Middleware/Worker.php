<?php

namespace App\Http\Middleware;

use Closure;

class Worker
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
        if(auth()->user()->role == 'pracownik'){
            return $next($request);
        }
        return redirect('home')->with('error','Nie masz dostępu do panelu administratora');
    }
}
