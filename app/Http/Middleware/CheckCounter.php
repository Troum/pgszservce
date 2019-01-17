<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckCounter
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
        $user = User::whereEmail($request->email)->first();
        if($user)
        {
            if ($user->code !== 'admin')
            {
                if ($user->counter === 0 || $user->counter <3)
                {
                    $user->counter++;
                    $user->save();
                    return $next($request);
                }
                else {
                    return redirect('/login')->with('error', 'Вы пытаетесь войти больше трех раз');
                }
            }
            else {
                return $next($request);
            }
        }
        else
        {
            return $next($request);
        }


    }
}
