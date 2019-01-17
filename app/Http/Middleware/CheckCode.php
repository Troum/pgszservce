<?php

namespace App\Http\Middleware;

use App\Codes;
use Closure;

class CheckCode
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
        $code = Codes::whereCode($request->code)->first();
        if ($code)
        {
            if(!$code->status) {
                $code->status = !$code->status;
                $code->save();
                return $next($request);
            }
            else {
                return redirect('/register')->with('error', 'Код уже использован');
            }
        }
        else {
            return redirect('/register')->with('error', 'Кода не существует');
        }

    }
}
