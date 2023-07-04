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
}
