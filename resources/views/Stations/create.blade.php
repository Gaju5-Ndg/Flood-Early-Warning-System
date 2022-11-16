@extends('Admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Station Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Station') }}" method="post">
        {!! csrf_field() !!}
        <label> name</label></br>
        <input type="text" name="name" id="name"  class="form-control"></br>
        <label>district</label></br>
        <input type="text" name="district" id="district" class="form-control"></br>
        <label>Admin_id</label></br>
        <input type="text" name="admin_id" id="admin_id" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
@stop