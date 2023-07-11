<?php

namespace App\Http\Controllers;

use App\Models\SectorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class SectorRequestController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
     
         $sectorRequest = new SectorRequest($validatedData);
         $sectorRequest->code = $randomString;
         $sectorRequest->citizen_id = $loggedInCitizenId;
         $sectorRequest->save();

         $useSmsApi = new SmsController();

         $message = 'Hello '. Auth::guard('citizen')->user()->names . ' your service request received successfully with this code'. $randomString .' Please wait for confirmation from your local administration about the schedule';

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
