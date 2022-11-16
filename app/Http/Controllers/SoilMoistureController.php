<?php

namespace App\Http\Controllers;

use App\Models\Soil_moisture;
use App\Http\Requests\StoreSoil_moistureRequest;
use App\Http\Requests\UpdateSoil_moistureRequest;

class SoilMoistureController extends Controller
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
     * @param  \App\Http\Requests\StoreSoil_moistureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoil_moistureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soil_moisture  $soil_moisture
     * @return \Illuminate\Http\Response
     */
    public function show(Soil_moisture $soil_moisture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soil_moisture  $soil_moisture
     * @return \Illuminate\Http\Response
     */
    public function edit(Soil_moisture $soil_moisture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoil_moistureRequest  $request
     * @param  \App\Models\Soil_moisture  $soil_moisture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoil_moistureRequest $request, Soil_moisture $soil_moisture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soil_moisture  $soil_moisture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soil_moisture $soil_moisture)
    {
        //
    }
}
