<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        if( auth()->user()->email == 'lalo@gmail.com' ) {
            return $next( $request );
        } else {
            return redirect('no-autorizado');
        }
    }
}
