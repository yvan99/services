<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitizenAuthController extends Controller
{

    protected $redirectTo = '/';
    protected $redirectToLogout = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:citizens',
            'password' => 'required',
            'names' => 'required',
            'telephone' => 'required',
            'national_id' => 'required',
        ]);

        $citizen = Citizen::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'names' => $request->names,
            'telephone' => $request->telephone,
            'national_id' => $request->national_id,
        ]);



        Auth::guard('citizen')->login($citizen);

        return redirect('/')->with('status', 'Registration successful. You are now logged in.');
    }


    protected function guard()
    {
        return Auth::guard('citizen');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('citizen')->attempt($credentials)) {
            return redirect()->intended($this->redirectTo);
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('citizen')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect($this->redirectToLogout);
    }
}
