@extends('Admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Admins') }}" method="post">
        {!! csrf_field() !!}
        <label>First name</label></br>
        <input type="text" name="first_name" id="first_name"  class="form-control"></br>
        <label>last name</label></br>
        <input type="text" name="second_name" id="second_name" class="form-control"></br>
        <label>gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>level</label></br>
        <input type="text" name="level" id="level" class="form-control"></br>
        <label>profession </label></br>
        <input type="text" name="profession" id="profession" class="form-control"></br>
        <label>password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>role</label></br>
        <input type="text" name="role" id="role" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
@stop