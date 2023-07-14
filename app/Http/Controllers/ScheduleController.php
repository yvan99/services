<?php

namespace App\Http\Controllers;

use App\Models\SectorRequest;
use App\Models\SectorSchedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function makeAppointment(Request $request)
    {
        $sectorRequestIds = $request->input('sector_request_id', []);
        $sectorRequests = SectorRequest::whereIn('id', $sectorRequestIds)->get();
        $schedules = [];

        foreach ($sectorRequests as $sectorRequest) {
            $sectorRequest->status = 'approved';
            $sectorRequest->save();

            $title = $sectorRequest->citizen->names . ' - ' . $sectorRequest->code;
            $schedule = SectorSchedule::create([
                'sector_request_id' => $sectorRequest->id,
                'date' => $request->input('date'),
                'hour' => $request->input('hour'),
                'title' => $title,
            ]);
            $schedules[] = $schedule;

            // Send SMS notification to the citizen
            $message = "Hello, {$sectorRequest->citizen->names}!";
            $message .= " Your appointment for the service request with code: {$sectorRequest->code} has been approved by the sector administration of: {$sectorRequest->sector->name} ";
            $message .= " At: {$request->input('date')}";
            $message .= " On: {$request->input('hour')}";
        }

        $callSmsClass = new SmsController;
        $callSmsClass->sendSms($sectorRequest->citizen->telephone, $message);

        return response()->json([
            'message' => 'Schedules created successfully',
            'schedules' => $schedules,
            'messages'=>$message
        ]);
    }
}
