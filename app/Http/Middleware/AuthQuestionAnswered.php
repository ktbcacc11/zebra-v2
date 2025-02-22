<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WPUsers;

class AuthQuestionAnswered
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
  
            $wp_user = WPUsers::where('user_id',session('user_id'))->first();
            if($wp_user->brain_profile_id == null || $wp_user->brain_profile_id == ''){
                return redirect('questions/q1');
            }
            else{
                return $next($request);
            }

    }
}
