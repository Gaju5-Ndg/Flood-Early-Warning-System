@extends('Admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Station Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Stations') }}" method="POST">
        {!! csrf_field() !!}
        <label> name</label></br>
        <input type="text" name="name" id="name"  class="form-control"></br>
        <label>water level</label></br>
        <input type="text" name="datails" id="detatils" class="form-control"></br>
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