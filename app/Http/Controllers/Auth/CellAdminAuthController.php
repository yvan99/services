<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CellAdminAuthController extends Controller
{

    protected $redirectTo = '/cell/dashboard';
    protected $redirectToLogout = '/cell/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('celladmin.login');
    }

    protected function guard()
    {
        return Auth::guard('cell_admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('cell_admin')->attempt($credentials)) {
            return redirect()->intended($this->redirectTo)->with('status', 'You are now logged in.');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('cell_admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect($this->redirectToLogout)->with('status', 'You are logged out');
    }
}
