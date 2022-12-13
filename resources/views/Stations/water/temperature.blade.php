@extends('Admins.layout')
@section('content')
<div class="card">
  <div class="card-header">temperature Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Stations') }}" method="POST">
        {!! csrf_field() !!}
        <label> name</label></br>
        <input type="text" name="details" id="details"  class="form-control"></br>
        <label>temperature</label></br>
        <input type="text" name="datails" id="datails" class="form-control"></br>
        <label>station</label></br>
        <select name="user_id" class="form-control">
            @foreach($stations as $station)
        <option value="{{$user->id}}">{{$station->name}}</option>
        @endforeach
       </select>
       
        <input type="submit" value="Save" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
@stop