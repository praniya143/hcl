<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class LogMiddleware
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
	    $currentPath= Route::getFacadeRoot()->current()->uri();
	    $log = new \App\Log;
	    $log->url = $currentPath;
	    $log->ip = $request->ip();
	    session_start();
	    if(isset($_SESSION['user_id']))
		    $log->user = $_SESSION['user_id'];
	    $log->save();
	    $request->request->add(['logid' => $log->id]); //add request
            return $next($request);
    }
}
