<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, int $role)
    {
        if (!Auth::check()) 
        return redirect('/login');
  
      $user = Auth::user();
      if($user->login_type == $role)
        return $next($request);
      return redirect('');

    }

    
}
