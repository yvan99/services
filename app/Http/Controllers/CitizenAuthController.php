<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitizenAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';
    protected $redirectToLogout = '/citizen/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:citizens',
            'password' => 'required',
        ]);

        $citizen = Citizen::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
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
}
