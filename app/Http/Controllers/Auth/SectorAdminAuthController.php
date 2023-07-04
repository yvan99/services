<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class SectorAdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/sector-admin/dashboard';
    protected $redirectToLogout = '/sector-admin/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.sector-admin-login');
    }

    protected function guard()
    {
        return \Auth::guard('sector_admin');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
}
