<?php

namespace App\Http\Middleware;
use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('adminId')) {
            $userId = Session::get('adminId');
            $user = Admin::find($userId);
            if ($user && $user->role === 'super_admin') {
                return $next($request); 
            }
        }
        return redirect('/')->with('fail', 'You do not have admin privileges.');
    }
}
