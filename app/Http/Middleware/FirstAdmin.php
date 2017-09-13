<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\User;

class FirstAdmin
{
    protected $auth;


    public function __construct(Guard $auth){
        $this->auth = $auth;

    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(count(User::where('type', 'admin')->get())==0){
            return $next($request);
        }else{
            return redirect()->guest('login');
        }
        
    }
}
