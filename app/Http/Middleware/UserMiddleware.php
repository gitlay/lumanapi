<?php

namespace App\Http\Middleware;

use Closure;
use Xavrsl\Cas\Facades\Cas;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //检查用户是否已登录
        if(!Cas::checkAuthenticate()){
            return response()->json(array('code'=>'100401','message'=>'Unauthorized','data'=>''));
        }

        return $next($request);
    }
}
