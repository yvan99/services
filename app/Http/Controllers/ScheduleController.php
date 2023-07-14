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
            $title = $sectorRequest->citizen->names . ' - ' . $sectorRequest->code;
            $schedule = SectorSchedule::create([
                'sector_request_id' => $sectorRequest->id,
                'date' => $request->input('date'),
                'hour' => $request->input('hour'),
                'title' => $title,
            ]);
            $schedules[] = $schedule;
        }
        return response()->json([
            'message' => 'Schedules created successfully',
            'schedules' => $schedules,
        ]);
    }
      
}
