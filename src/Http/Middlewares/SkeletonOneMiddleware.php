<?php

namespace VendorName\Skeleton\Http\Middlewares;

use Closure;

class SkeletonOneMiddleware
{
  public function handle($request, Closure $next)
  {
    //
    return $next($request);
  }
}
