<?php

namespace App\Http\Controllers;

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

        // Generate a random password for the sector admin
        $generatedPassword = $this->generatePassword();

        // Create the sector admin
        $sectorAdmin = SectorAdmin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'sector' => $validatedData['sector'],
            'telephone' => $validatedData['telephone'],
            'password' => Hash::make($generatedPassword),
        ]);

        // Return a response with the welcome message and generated password
        return response()->json([
            'message' => 'Hello ' . $sectorAdmin->name . ', welcome to the project! You have been registered as a sector admin at ' . $sectorAdmin->sector . '. Your new password is: ' . $generatedPassword,
        ]);
    }

    public function index()
    {
        $sectorAdmins = SectorAdmin::all();

        return view('sector-admins.index', compact('sectorAdmins'));
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
