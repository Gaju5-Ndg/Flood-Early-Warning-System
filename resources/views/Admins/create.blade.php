@extends('layout')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Admin page of the EW-System</h2>
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


      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Admins') }}" method="POST">
        {!! csrf_field() !!}
        <label>First name</label></br>
        <input type="text" name="first_name" id="first_name"  class="form-control"></br>
        <label>last name</label></br>
        <input type="text" name="second_name" id="second_name" class="form-control"></br>
        <label>gender</label></br>
        <select name="gender" id="gender" class="form-control" >
        <option value="male">Male</option>
        <option value="female">Female</option>
       </select></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>level</label></br>
        <select name="level" id="level" class="form-control" >
        <option value="head office">Head office</option>
        <option value="district office">District office</option>
        <option value="sector office">Sector office</option>
       </select></br>
        <label>profession </label></br>
        <input type="text" name="profession" id="profession" class="form-control"></br>
        <label>password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>Role</label></br>
        <select name="role" id="role" class="form-control" >
        <option value="land_manager">Land manager</option>
        <option value="fammer">Fammer</option>
        <option value="it">IT</option>
       </select></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
</main>
 
 @endsection                                                                         

