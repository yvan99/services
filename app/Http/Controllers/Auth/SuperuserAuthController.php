<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SuperuserAuthController extends Controller
{
    
    protected $redirectTo = '/superuser/dashboard';
    protected $redirectToLogout = '/superuser/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('superuser.login');
    }

    protected function guard()
    {
        return Auth::guard('superuser');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
}
