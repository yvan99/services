<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class CitizenAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/citizen/dashboard';
    protected $redirectToLogout = '/citizen/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.citizen-login');
    }

    protected function guard()
    {
        return \Auth::guard('citizen');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
}
