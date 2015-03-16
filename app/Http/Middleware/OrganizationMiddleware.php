<?php namespace App\Http\Middleware;

use Closure;

use App\Organization;
use Auth;

class OrganizationMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
    $currentUser = \Auth::user();
    $organization = Organization::find($currentUser->id);
    view()->share(compact('currentUser', 'organization'));
		return $next($request);
	}

}
