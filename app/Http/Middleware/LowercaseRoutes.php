<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Support\Facades\Redirect;

class LowercaseRoutes
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
        $word = explode("/",urldecode($request->path()));
        if(preg_match('/[А-Яа-яЁё]/u', urldecode($request->path())) and preg_replace('/[А-ЯЁ]+/u', '', urldecode($request->path()))!=urldecode($request->path()) ){
          $new_route = str_replace($request->path(), $word[0].'/'.str_replace(' ','-',ruToEnLetter($word[1])), $request->fullUrl());
          return Redirect::to($new_route, 301);
        }else if(!ctype_lower(preg_replace('/[^A-Za-z]/', '', $request->path()))){
      		$new_route = str_replace($request->path(), mb_strtolower($request->path()), $request->fullUrl());
      		return Redirect::to($new_route, 301);
      	}
        return $next($request);
    }
}
