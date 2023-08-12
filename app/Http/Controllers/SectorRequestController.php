<?php

namespace App\Http\Controllers;

use App\Models\CellRequest;
use App\Models\SectorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class SectorRequestController extends Controller
{
    public function viewRequests()
    {
        $citizenId = Auth::guard('citizen')->user()->id;

        $sectorRequests = SectorRequest::with('sectorSchedule')->where('citizen_id', $citizenId)->get();
        $cellRequests = CellRequest::with('cellSchedule')->where('citizen_id', $citizenId)->get();

        return view('requests.show', compact('sectorRequests', 'cellRequests'));
    }


    public function store(Request $request)
    {
        $loggedInCitizenId = Auth::guard('citizen')->user()->id;
        $randomString = Str::random(10);
        $validatedData = $request->validate([
            'service_id' => 'required',
            'sector_id' => 'required',
            'preferred_date' => 'required|date',
            'preferred_hour' => 'required',
            'description' => 'nullable',
        ]);

        // Check if there are 5 requests for the same day and hour
        $existingRequestsCount = SectorRequest::where('sector_id', $validatedData['sector_id'])
            ->where('preferred_date', $validatedData['preferred_date'])
            ->where('preferred_hour', $validatedData['preferred_hour'])
            ->count();

        // dd($existingRequestsCount);

        if ($existingRequestsCount >= 1) {
            // Generate alternative hours for suggestions (example: +/- 1 hour)
            $suggestedHours = [];
            $originalHour = $validatedData['preferred_hour'];

            // Suggest earlier hours
            for ($i = 1; $i <= 3; $i++) {
                $suggestedHour = date('H:i', strtotime($originalHour) - ($i * 3600)); // Subtract seconds for each hour
                $suggestedHours[] = $suggestedHour;
            }

            // Suggest later hours
            for ($i = 1; $i <= 3; $i++) {
                $suggestedHour = date('H:i', strtotime($originalHour) + ($i * 3600)); // Add seconds for each hour
                $suggestedHours[] = $suggestedHour;
            }

            // Prepare the response message with suggested hours
            $responseMessage = 'We have received many requests for the same date and hour. Please consider the following alternative options:'.'<br/>';
            foreach ($suggestedHours as $suggestedHour) {
                $responseMessage .= "<br> {$validatedData['preferred_date']} {$suggestedHour}";
            }

            return back()->with('responseMessage', $responseMessage);
        }

        // Save the sector request
        $sectorRequest = new SectorRequest($validatedData);
        $sectorRequest->code = $randomString;
        $sectorRequest->citizen_id = $loggedInCitizenId;
        $sectorRequest->save();

        // Send SMS notification
        $useSmsApi = new SmsController();
        $message = 'Hello ' . Auth::guard('citizen')->user()->names . ' your service request received successfully with this code  ' . $randomString . '  Please wait for confirmation from your local administration about the schedule';
        $useSmsApi->sendSms(Auth::guard('citizen')->user()->telephone, $message);

        return back()->with('status', 'Service Request received successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
