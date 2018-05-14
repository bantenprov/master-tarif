<?php namespace Bantenporv\MasterTarif\Http\Middleware;

use Closure;

/**
 * The MasterTarifMiddleware class.
 *
 * @package Bantenporv\MasterTarif
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MasterTarifMiddleware
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
        return $next($request);
    }
}
