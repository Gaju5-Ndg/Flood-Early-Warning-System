@extends('Admins.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Update Station </div>
  <div class="card-body">
      
      <form action="{{ url('Stations/'.$station->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>name</label></br>
        <input type="text" name="name" id="name" value="{{$station->name}}" class="form-control"></br>
        <label>district</label></br>
        <input type="text" name="second_name" id="second_name" value="{{$station->name}}" class="form-control"></br>
        <label>Admin_id</label></br>
        <input type="text" name="admin_id" id="admin_id" value="{{$station->admin_id}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop