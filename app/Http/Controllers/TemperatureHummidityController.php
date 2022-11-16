<?php

namespace App\Http\Controllers;

use App\Models\Temperature_hummidity;
use App\Http\Requests\StoreTemperature_hummidityRequest;
use App\Http\Requests\UpdateTemperature_hummidityRequest;

class TemperatureHummidityController extends Controller
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
     * @param  \App\Http\Requests\StoreTemperature_hummidityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemperature_hummidityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temperature_hummidity  $temperature_hummidity
     * @return \Illuminate\Http\Response
     */
    public function show(Temperature_hummidity $temperature_hummidity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temperature_hummidity  $temperature_hummidity
     * @return \Illuminate\Http\Response
     */
    public function edit(Temperature_hummidity $temperature_hummidity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemperature_hummidityRequest  $request
     * @param  \App\Models\Temperature_hummidity  $temperature_hummidity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemperature_hummidityRequest $request, Temperature_hummidity $temperature_hummidity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temperature_hummidity  $temperature_hummidity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temperature_hummidity $temperature_hummidity)
    {
        //
    }
}
