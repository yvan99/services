<?php

namespace App\Http\Controllers;

use App\Models\CellAdmin;
use App\Models\CellRequest;
use App\Models\Sector;
use Illuminate\Http\Request;
use App\Models\SectorAdmin;
use App\Models\SectorRequest;
use Illuminate\Support\Facades\Auth;
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
            'names' => $validatedData['name'],
            'email' => $validatedData['email'],
            'sector_id' => $validatedData['sector'],
            'telephone' => $validatedData['telephone'],
            'password' => Hash::make($generatedPassword),
        ]);

        $callSms = new SmsController;
        $message = 'Hello ' . $sectorAdmin->names . ', welcome to the project! You have been registered as a sector admin at ' . $sectorAdmin->sector->name . '. Your new password is: ' . $generatedPassword;
        $callSms->sendSms($request->telephone, $message);
        return redirect()->back()->with('status', 'User Registered');
    }

    public function registerCellAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:cell_admins',
            'cell' => 'required',
            'telephone' => 'required|unique:cell_admins'
        ]);

        $generatedPassword = $this->generatePassword();

        // Create the cell admin
        $cellAdmin = CellAdmin::create([
            'names' => $validatedData['name'],
            'email' => $validatedData['email'],
            'cell_id' => $validatedData['cell'],
            'telephone' => $validatedData['telephone'],
            'password' => Hash::make($generatedPassword),
        ]);

        $callSms = new SmsController;
        $message = 'Hello ' . $cellAdmin->names . ', welcome to the project! You have been registered as a cell admin at ' . $cellAdmin->cell->name . ' In ' . $cellAdmin->cell->sector->name . ' sector . Your new password is: ' . $generatedPassword;
        $callSms->sendSms($request->telephone, $message);
        return redirect()->back()->with('status', 'User Registered');
    }

    public function index()
    {
        $sectors = Sector::all();
        $sectorAdmins = SectorAdmin::with('sector')->get();

        return view('sectoradmin.index', compact('sectorAdmins', 'sectors'));
    }

    public function showCellAdmins()
    {
        $sectors = Sector::all();
        $cellAdmins = CellAdmin::with(['cell.sector'])->get();

        return view('celladmin.index', compact('cellAdmins', 'sectors'));
    }


    // Helper method to generate a random password
    private function generatePassword($length = 10)
    {
        $characters = '0123456789aABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, $max)];
        }

        return $password;
    }

    public function viewSectorRequests()
    {
        $sectorAdmin = Auth::guard('sector_admin')->user();
        $sectorId = $sectorAdmin->sector_id;

        // Get the sector requests in the admin's sector
        $sectorRequests = SectorRequest::where('sector_id', $sectorId)->where('status', 'pending')->orderBy('sector_requests.created_at')->get();

        // Eager load the citizen and service relationships
        $sectorRequests->load('citizen', 'service');
        return view('requests.sector', compact('sectorRequests'));
    }


    public function viewCellRequests()
    {
        $cellAdmin = Auth::guard('cell_admin')->user();
        $cellId = $cellAdmin->cell_id;

        // Get the sector requests in the admin's sector
        $cellRequests = CellRequest::where('cell_id', $cellId)->where('status', 'pending')->orderBy('cell_requests.created_at')->get();

        // Eager load the citizen and service relationships
        $cellRequests->load('citizen', 'service');
        return view('requests.cell', compact('cellRequests'));
    }
}
