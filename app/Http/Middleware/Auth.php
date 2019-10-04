<?php

namespace App\Http\Middleware;

use Closure;

class Auth
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
        if (auth()->guest()){
            session()->flash('message','Vous devez être connecté pour voir cette page.');
            return redirect('viewlogin')->with('status','vous devez vous connecter au début pour accéder cette page');
            }
        return $next($request);
    }
}
