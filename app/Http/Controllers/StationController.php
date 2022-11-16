<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use Illuminate\Http\Request;
class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $station = Station::latest()->paginate(5);

    

        return view('Stations.index',compact('station'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function show($id){

    
        $station=Station::find($id);
         return view('Stations.show')->with('station',$station);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Stations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    // public function show(Station $station)
    // {
    //     $request->validate([
    //         'name'=>'required',
    //         'district'=>'required',
    //         'Admin_id'=>'required',
            
    //     ]);
    
    //     $admin->store($request);
    
    //     return redirect()->route('Stations.index')
    //                     ->with('success','admins created successfully');;
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $station=Station::find($id);
    
        return view('Stations.edit')->with('station',$station);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStationRequest  $request
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $station=Station::find($id);
        $input=$request->all();
        $station->update($input);
    
        return redirect()->route('Stations.index')
                        ->with('success','Station updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Station::destroy($id);
    
        return redirect()->route('Stations.index')
                        ->with('success','stations deleted successfully');
    }

    public function insertintostation(Request $request)
    {
    $station=new Station;
    $station->name=$request->name;
    $station->district=$request->district;
    $station->admin_id=$request->admin_id;
    $result=$station->save();
    return redirect()->route('Stations.index')
    ->with('success','Station created successfully.');
    }
    function updatestation(Request $request ,$id){
    $station=Station::find($id);
    $station->name=$request->name;
    $station->district=$request->district;
    $station->admin_id=$request->admin_id;
    $result=$station->save();
    return redirect()->route('Stations.index')
        ->with('success','Station updated successfully.');
    }
    function showstation(){
        return Station::all();
    }
    function deletestation($id){
return Station::destroy($id);

    }
}
