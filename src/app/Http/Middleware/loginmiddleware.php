<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\account;
use App\Models\category;
use App\Models\words;
class loginmiddleware
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
        $user_inform = account::get();
        if($user_inform->mail_address==$request->mail_address && $user_inform->password==$request->pass){
            $request->session()->put('user_name', $user_inform->user_name);
            return $next($request);
        }else {
            return view("final.fail");
        }
    }
}
