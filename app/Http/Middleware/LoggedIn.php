<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Kreait\Firebase\Factory ;
use Kreait\Firebase\ServiceAccount ;
use Kreait\Firebase\Auth;

class LoggedIn 
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
         

        return redirect('LoginFire');
       

        
    }
}
