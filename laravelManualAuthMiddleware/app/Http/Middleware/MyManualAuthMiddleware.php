<?php

namespace App\Http\Middleware;


use App\ManualAuth\Guard;
use Closure;





class MyManualAuthMiddleware
{

    protected $manualGuard;

    public function __construct(Guard $manualGuard)
    {
        $this->manualGuard = $manualGuard;
    }


    public function handle($request, Closure $next)
    {

        if($this->manualGuard->check()) {
            return $next($request);
        }
        return redirect('login');
    }
}
