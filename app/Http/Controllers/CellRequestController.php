<?php

namespace App\Http\Controllers;

use App\Models\Cell;
use App\Models\CellRequest;
use Illuminate\Http\Request;
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

    public function showCellRequests()
    {
        $cellRequests = CellRequest::where('citizen_id', Auth::guard('citizen')->user()->id)->get();

        return view('requests.show', compact('cellRequests'));
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
         $randomString = Str::random(10);
         $sectorRequest = new CellRequest($validatedData);
         $sectorRequest->code = $randomString;
         $sectorRequest->citizen_id = $loggedInCitizenId;
         $sectorRequest->save();

         $useSmsApi = new SmsController();
        
         $message = 'Hello '. Auth::guard('citizen')->user()->names . ' your service request received successfully with this code  '. $randomString .' Please wait for confirmation from your local administration about the schedule';

         $useSmsApi->sendSms(Auth::guard('citizen')->user()->telephone,$message);

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
