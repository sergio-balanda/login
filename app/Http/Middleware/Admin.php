<?php

namespace log\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;
use redirect;

class Admin
{
    protected $auth;
    
    public function __construct(Guard $auth)
    {
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
        if($this->auth->user()->type != 'admin'){
           // Session::flash('message-error','No autorizado');
            return redirect()->to('/home');
        }
        return $next($request);
    }
}
