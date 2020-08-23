<?php

namespace App\Http\Middleware;

use Closure;
use App\AdminUser;
use Illuminate\Support\Facades\Auth;

class CheckRoleAdmin
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
        if (!Auth::guard("admins")->check()) {
            return redirect('admin/login');
        }

        $user = Auth::guard("admins")->user();
        //dd($user);

        //if (!$user->can('show', AdminUser::class)) {
        //    return redirect('/admin/403');
        //}

        return $next($request);
    }
}
