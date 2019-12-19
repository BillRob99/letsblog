<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfHasProfile
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
        $user = Auth::user();
      

        if($user->profile != null) {
            return $next($request);
        }
        
        session()->flash('message', 'You have not yet created a profile!');
        return redirect()->route('profiles.create');
    }
}
