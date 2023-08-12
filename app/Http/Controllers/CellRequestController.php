<?php

namespace App\Http\Controllers;

use App\Models\Cell;
use App\Models\CellRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CellRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getCellsBySector($sectorId)
    {
        $cells = Cell::where('sector_id', $sectorId)->get();

        return response()->json($cells);
    }

    public function store(Request $request)
    {
        $loggedInCitizenId = Auth::guard('citizen')->user()->id;

        $validatedData = $request->validate([
            'service_id' => 'required',
            'sector_id' => 'required',
            'cell_id' => 'required',
            'preferred_date' => 'required|date',
            'preferred_hour' => 'required',
            'description' => 'nullable',
        ]);

        $existingRequestsCount = CellRequest::where('cell_id', $validatedData['cell_id'])
            ->where('preferred_date', $validatedData['preferred_date'])
            ->where('preferred_hour', $validatedData['preferred_hour'])
            ->count();

        if ($existingRequestsCount >= getenv("MAX_USERS_PER_REQUEST")) {
            $suggestedHours = [];
            $originalPreferredHour = $validatedData['preferred_hour'];

            for ($i = 1; $i <= 5; $i++) {
                $hour = Carbon::parse($originalPreferredHour)->addHours($i)->format('H:i');
                $suggestedHours[] = $hour;
            }

            $responseMessage = 'We have received many requests for the same date and hour. Please consider the following alternative options:'.'<br/>';
            foreach ($suggestedHours as $suggestedHour) {
                $responseMessage .= '<br>' . $validatedData['preferred_date'] . ' ' . $suggestedHour;
            }

            return redirect()->back()->with('responseMessage', $responseMessage);
        }

        $randomString = Str::random(10);
        $cellRequest = new CellRequest($validatedData);
        $cellRequest->code = $randomString;
        $cellRequest->citizen_id = $loggedInCitizenId;
        $cellRequest->save();

        // Send SMS
        $useSmsApi = new SmsController();
        $message = 'Hello ' . Auth::guard('citizen')->user()->names . ' your service request received successfully with this code ' . $randomString . '. Please wait for confirmation from your local administration about the schedule';
        $useSmsApi->sendSms(Auth::guard('citizen')->user()->telephone, $message);

        return back()->with('status', 'Service Request received successfully');
    }
}
