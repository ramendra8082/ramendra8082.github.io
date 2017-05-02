<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Confirmed
{
	public function handle($request, Closure $next)
	{
		if(!Auth::check()){
			return redirect('/login');
		}
		if(Auth::user()->token){
			return redirect('verify')->with('status-alert','Email Verification Pending');
		}
		return $next($request);
	}
}
