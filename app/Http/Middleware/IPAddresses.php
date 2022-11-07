<?php

namespace App\Http\Middleware;

use Closure;

class IPAddresses
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

        return $next($request);
  //       if(request()->getRequestUri() == '/maint')
  //       {
  //           return $next($request);    
  //       }

  // if ($_SERVER["REMOTE_ADDR"] != '145.249.63.139' && $_SERVER["REMOTE_ADDR"] != '145.249.63.139'&& $_SERVER["REMOTE_ADDR"] != '10.10.30.110' && $_SERVER["REMOTE_ADDR"] != '188.133.13.2' && $_SERVER["REMOTE_ADDR"] != '94.47.152.247' && $_SERVER["REMOTE_ADDR"] != '192.168.2.1' && $_SERVER["REMOTE_ADDR"] != '192.168.2.6' ) {
  //           return response(redirect(url('/maint')));
  //           abort(404);
  //       }
  //       return $next($request);
    }
}
