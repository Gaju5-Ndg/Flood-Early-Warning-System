<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\User;
use App\Models\Temperature_hummidity;
use App\Models\Water_level;
use App\Models\Soil_moisture;
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
    public function stationInfo()
    {
        $station = Station::all();
    

        return view('Stations.stationinfo',compact('station'))

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
     $users=User::where('role','Land manager')->get();
     return view('Stations.create')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $station=new Station;
       $station->name=$request->name;
       $station->district=$request->district;
       $station->user_id=$request->user_id;
       $station->save();
       return redirect()->route('Stations.index')
                        ->with('success','station created successfully');;
    }
    

   
    public function edit($id)
    {
        $station=Station::find($id);
        $users=User::where('role','Land manager')->get();
        return view('Stations.edit')->with('station',$station)->with('users',$users);
    }

    
    public function update(Request $request, $id)
    {
        $station=Station::find($id);
        $input=$request->all();
        $station->update($input);
    
        return redirect()->route('Stations.index')
                        ->with('success','Station updated successfully'); 
    }

  
    public function destroy($id)
    {
        Station::destroy($id);
    
        return redirect()->route('Stations.index')
                        ->with('success','stations deleted successfully');
    }



public function waterdata($id){

    
    $station=Station::find($id);
    $temp=Temperature_hummidity::where('station_id',$id)->get();
    $waterlevel=Water_level::where('station_id',$id)->get();
    $soilMoisture=Soil_moisture::where('station_id',$id)->get();
    if(count($temp)!=0)
    {
        $humidity=$temp[0]->hummidity;
        $templ=$temp[0]->temperature;
        
    }
    else{
        $templ=0;
        $humidity=0;
    }
    if(count($waterlevel)!=0)
    {
        $water=$waterlevel[0]->waterlevel;
    }
    else{
        $water=0;
    }
    if(count($soilMoisture)!=0)
    {
        $soil=$soilMoisture[0]->moisture_level;
    }
    else{
        $soil=0;
    }

    return view('Stations.river')->with('station',$station)->with('temperature',$templ)->with('water',$water)->with('soil',$soil)->with('temp',$temp)->with('humidity',$humidity)->with('waterlevel',$waterlevel)->with('soilMoisture',$soilMoisture);
} 


public function updateWaterData(Request $request, $id)
{
    $data=Water_level::where('station_id',$id)->get();
    $record=Water_level::find($data[0]->id);
    $input=$request->all();
    $record->update($input);
    return redirect('/station/'.$id)
                    ->with('success','Station updated successfully'); 
}
public function updateSoilData(Request $request, $id)
{

    $data=Soil_moisture::where('station_id',$id)->get();
    $record=Soil_moisture::find($data[0]->id);
    $input=$request->all();
    $record->update($input);

    return redirect('/station/'.$id)
                    ->with('success','Station updated successfully'); 
}
public function updateTempData(Request $request, $id)
{
    $data=Temperature_hummidity::where('station_id',$id)->get();
    $record=Temperature_hummidity::find($data[0]->id);
    $input=$request->all();
    $record->update($input);

    return redirect('/station/'.$id)
                    ->with('success','Station updated successfully'); 
}
}
