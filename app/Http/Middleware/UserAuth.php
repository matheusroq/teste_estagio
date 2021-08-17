<?php

namespace App\Http\Middleware;
use \Illuminate\Http\Request;
use Closure;

class UserAuth
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
        session_start();
        if(isset($_SESSION['email']) && $_SESSION['name'] != '') {     
            return $next($request);
        } else {
            return redirect()->route('login.index', ['erro' => 2]);
        } 
    }
}
