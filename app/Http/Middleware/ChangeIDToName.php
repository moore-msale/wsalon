<?php

namespace App\Http\Middleware;

use Closure;
use App\Dress;
use \Illuminate\Support\Facades\Redirect;

class ChangeIDToName
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
        $id = str_replace("dress/", "",$request->path());
        if(is_numeric($id) and $id!=17){
          $dress = Dress::find($id);

          if($dress){
            $new_route = str_replace($request->path(), 'dress/'.str_replace(' ','-',ruToEnLetter($dress->title)), $request->fullUrl());
            return Redirect::to($new_route, 301);
          }
        }
        return $next($request);
    }
}
