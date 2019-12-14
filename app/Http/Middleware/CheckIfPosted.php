<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class CheckIfPosted
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
        $post = $request->post;
        

            if($user->profile->posts->find($post) != null) {
                
                return $next($request);
            } 
            
        session()->flash('message', 'You can only edit an item if you posted it.');
        return redirect()->back();
    }
}
