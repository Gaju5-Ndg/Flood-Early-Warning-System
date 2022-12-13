

@extends('layout')
@section('content')
      
              <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>{{ $station->name }}  details</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      <div class="card">
  <div class="card-body">
   Station: {{ $station->name }}  /Disrict: {{ $station->district }} 
  </div>
</div>
 <div class="row">
       <div class="col-xl- 2col-md-4">
       <div class="card bg-dark text-white mb-4">
       <div class="card-body">Temperature-humidity </div>
       <div class="card-footer d-flex align-items-center justify-content-between">
      <p class="card-text">{{$temperature}} degree</p>
      <p class="card-text">{{$humidity}} degree</p>
    
    </div>
  </div>
</div>

<div class="col-xl-3 col-md-6">
       <div class="card bg-dark text-white mb-4">
       <div class="card-body">watel level </div>
       <div class="card-footer d-flex align-items-center justify-content-between">
      <p class="card-text">{{$water}} cm3</p>
      
    
    </div>
  </div>
</div>
  
<div class="col-xl-3 col-md-6">
       <div class="card bg-dark text-white mb-4">
       <div class="card-body">soil moisture</div>
       <div class="card-footer d-flex align-items-center justify-content-between">
      <p class="card-text">{{$soil}} bar</p>
    </div>
   </div>
  </div>
</div>
@if(Auth::user()->role=='Land manager')
<div class="card-group">
<div class=" card text-white bg-dark mb-3" style="max-width: 19rem;">
<div class="card">
  <div class="card-header text-white bg-dark mb-3">temperature Page</div>
  <div class="card-body">
      
      <form action="{{ url('/rivers/temp/'.$station->id) }}" method="POST">
        {!! csrf_field() !!}
        @method('patch')
        <label  class="text-dark"> temperature</label></br>
        <input type="text" name="temperature" id="details" value="{{$temperature}}" class="form-control"></br>
        <label class="text-dark">Details</label></br>
        <input type="text" name="description" id="datails" value="{{$temp[0]->description}}"class="form-control"></br>
        <input type="number" name="station_id" value="{{$station->id}}"class="form-control"hidden>
        <input type="number" name="user_id" value="{{Auth::user()->id}}"class="form-control"hidden>
       
        <input type="submit" value="Update" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
</div>


<div  class="card text-white bg-primary mb-3" style="max-width: 19rem;">
<div class="card">
  <div class="card-header text-white bg-dark mb-3">water level</div>
  <div class="card-body">
      
      <form action="{{ url('/rivers/wl/'.$station->id) }}" method="POST">
        {!! csrf_field() !!}
        @method('patch')
        <label class="text-dark"> water level</label></br>
        <input type="text" name="waterlevel" id="name" value="{{$water}}" class="form-control"></br>
        <label class="text-dark">Details</label></br>
        <input type="text" name="description" id="detatils" value="{{$waterlevel[0]->description}}" class="form-control"></br>
        <input type="number" name="station_id" value="{{$station->id}}"class="form-control" hidden>
        <input type="number" name="user_id" value="{{Auth::user()->id}}"class="form-control"hidden>
       
        <input type="submit" value="Update" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
</div>


<div class="card text-white bg-dark mb-3" style="max-width: 19rem;">
 <div class="card">
  <div class="card-header text-white bg-dark mb-3">soil moisture page</div>
  <div class="card-body">
      
      <form action="{{ url('/rivers/sl/'.$station->id) }}" method="POST">
        {!! csrf_field() !!}
        @method('patch')
        <label class="text-dark"> soil moisture</label></br>
        <input type="text" name="moisture_level" id="name" value="{{$soil}}" class="form-control  "></br>
        <label class="text-dark">Details</label></br>
        <input type="text" name="description" id="details" value="{{$soilMoisture[0]->description}}" class="form-control"></br>
        <input type="number" name="station_id" value="{{$station->id}}"class="form-control"hidden>
        <input type="number" name="user_id" value="{{Auth::user()->id}}"class="form-control"hidden>
        <input type="submit" value="Update" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
</div>
</div>
@endif
</main>
@endsection                                                                  


