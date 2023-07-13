<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;
use App\Models\SectorAdmin;
use Illuminate\Support\Facades\Hash;

class SectorAdminController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:sector_admins',
            'sector' => 'required',
            'telephone' => 'required|unique:sector_admins'
        ]);

        $generatedPassword = $this->generatePassword();

        // Create the sector admin
        $sectorAdmin = SectorAdmin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'sector' => $validatedData['sector'],
            'telephone' => $validatedData['telephone'],
            'password' => Hash::make($generatedPassword),
        ]);

        $callSms = new SmsController;
        $message ='Hello ' . $sectorAdmin->name . ', welcome to the project! You have been registered as a sector admin at ' . $sectorAdmin->sector . '. Your new password is: ' . $generatedPassword;
        $callSms->sendSms($request->telephone,$message);
        return redirect()->back()->with('status','User Registered');

    }

    public function index()
    {
        $sectors = Sector::all();
        $sectorAdmins = SectorAdmin::with('sector')->get();
    
        return view('sector-admins.index', compact('sectorAdmins', 'sectors'));
    }
    

    // Helper method to generate a random password
    private function generatePassword($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, $max)];
        }

        return $password;
    }
}
