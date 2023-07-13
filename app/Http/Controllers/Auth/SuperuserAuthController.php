<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SuperUserAuthController extends Controller
{
    
    protected $redirectTo = '/admin/dashboard';
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


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('superuser')->attempt($credentials)) {
            return redirect()->intended($this->redirectTo)->with('status', 'You are now logged in.');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}
