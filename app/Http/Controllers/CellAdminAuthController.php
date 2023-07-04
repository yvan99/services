<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class CellAdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/cell-admin/dashboard';
    protected $redirectToLogout = '/cell-admin/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.cell-admin-login');
    }

    protected function guard()
    {
        return \Auth::guard('cell_admin');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
}
