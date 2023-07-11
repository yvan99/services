<?php

namespace App\Http\Controllers;

use App\Models\CellRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $loggedInCitizenId = Auth::id(); // Get the logged-in citizen's ID

        $validatedData = $request->validate([
            'sector_id' => 'required',
            'cell_id' => 'required',
            'preferred_date' => 'required|date',
            'preferred_hour' => 'required',
            'description' => 'nullable',
        ]);

        $cellRequest = new CellRequest($validatedData);
        $cellRequest->citizen_id = $loggedInCitizenId; // Assign the logged-in citizen's ID
        $cellRequest->save();

        // Redirect or return a response as needed
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
