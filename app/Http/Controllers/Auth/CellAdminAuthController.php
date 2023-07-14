<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CellAdminAuthController extends Controller
{

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
        return Auth::guard('cell_admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('cell-admin')->attempt($credentials)) {
            return redirect()->intended($this->redirectTo)->with('status', 'You are now logged in.');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}
