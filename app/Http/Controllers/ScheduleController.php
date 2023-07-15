<?php

namespace App\Http\Controllers;

use App\Models\CellRequest;
use App\Models\CellSchedule;
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
            'messages' => $message
        ]);
    }

    public function makeCellAppointment(Request $request)
    {
        $cellRequestIds = $request->input('cell_request_id', []);
        $cellRequests = CellRequest::whereIn('id', $cellRequestIds)->get();
        $schedules = [];

        foreach ($cellRequests as $cellRequest) {
            $cellRequest->status = 'approved';
            $cellRequest->save();

            $title = $cellRequest->citizen->names . ' - ' . $cellRequest->code;
            $schedule = CellSchedule::create([
                'cell_request_id' => $cellRequest->id,
                'date' => $request->input('date'),
                'hour' => $request->input('hour'),
                'title' => $title,
            ]);
            $schedules[] = $schedule;

            // Send SMS notification to the citizen
            $message = "Hello, {$cellRequest->citizen->names}!";
            $message .= " Your appointment for the service request with code: {$cellRequest->code} has been approved by the cell administration of: {$cellRequest->cell->name} ";
            $message .= " At: {$request->input('date')}";
            $message .= " On: {$request->input('hour')}";
        }

        $callSmsClass = new SmsController;
        $callSmsClass->sendSms($cellRequest->citizen->telephone, $message);

        return response()->json([
            'message' => 'Schedules created successfully',
            'schedules' => $schedules,
            'messages' => $message
        ]);
    }

    public function cellCalendar()
    {
        $cellSchedules = CellSchedule::all();

        $events = [];
        foreach ($cellSchedules as $cellSchedule) {
            $event = [
                'id' => $cellSchedule->id,
                'title' => $cellSchedule->title,
                'start' => $cellSchedule->date . 'T' . $cellSchedule->hour, // Format the date and time
                'allDay' => false
            ];
            $events[] = $event;
        }


        return response()->json($events);
    }

    public function sectorCalendar()
    {
        $sectorSchedules = SectorSchedule::all();

        $events = [];
        foreach ($sectorSchedules as $sectorSchedule) {
            $event = [
                'id' => $sectorSchedule->id,
                'title' => $sectorSchedule->title,
                'start' => $sectorSchedule->date . 'T' . $sectorSchedule->hour, 
                'allDay' => false
            ];
            $events[] = $event;
        }


        return response()->json($events);
    }
}
