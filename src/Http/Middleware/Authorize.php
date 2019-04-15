<?php

namespace vFire\ResourceGenerator\Http\Middleware;

use Illuminate\Http\Request;
use vFire\ResourceGenerator\ResourceGenerator;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return app(ResourceGenerator::class)->authorize($request)
        ? $next($request)
        : abort(403);
    }
}
