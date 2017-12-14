<?php
/**
 * Created by PhpStorm.
 * User: wilson mani
 * Date: 07-12-2017
 * Time: 16:27
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/');
        }
        return $next($request);
    }
}