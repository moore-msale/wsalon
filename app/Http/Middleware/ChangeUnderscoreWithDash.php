<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Support\Facades\Redirect;

class ChangeUnderscoreWithDash
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
        if(str_replace("_", "", $request->path()) != $request->path()){
          $new_route = str_replace($request->path(), str_replace("_", "-",$request->path()), $request->fullUrl());
      		return Redirect::to($new_route, 301);
        }
        return $next($request);
    }
}
