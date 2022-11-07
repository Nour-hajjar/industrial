<?php

namespace App\Http\Middleware;

use Closure;
use Spatie\Permission\Models\Role;
use App\Http_log;
use App\Http\Middleware\Request;
class HttpLogMiddleware
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

       $http = Http_log::create(['ip' => $_SERVER['REMOTE_ADDR']
             ,'browser'=>  $_SERVER['HTTP_USER_AGENT']
            ,'date' => date("l j F Y  g:ia", time() - date("Z"))
            ,'route'=>\Request::getRequestUri()
           ]);
      

        return $next($request);
    }
}
