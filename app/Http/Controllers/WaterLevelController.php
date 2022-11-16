<?php

namespace App\Http\Controllers;

use App\Models\Water_level;
use App\Http\Requests\StoreWater_levelRequest;
use App\Http\Requests\UpdateWater_levelRequest;

class WaterLevelController extends Controller
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
     * @param  \App\Http\Requests\StoreWater_levelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWater_levelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Water_level  $water_level
     * @return \Illuminate\Http\Response
     */
    public function show(Water_level $water_level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Water_level  $water_level
     * @return \Illuminate\Http\Response
     */
    public function edit(Water_level $water_level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWater_levelRequest  $request
     * @param  \App\Models\Water_level  $water_level
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWater_levelRequest $request, Water_level $water_level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Water_level  $water_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Water_level $water_level)
    {
        //
    }
}
