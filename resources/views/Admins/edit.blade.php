
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
            <div class="card">
  <div class="card-header">Update admin </div>
  <div class="card-body">
      
      <form action="{{ url('Admins/'.$admin->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>First name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$admin->first_name}}" class="form-control"></br>
        <label>last name</label></br>
        <input type="text" name="second_name" id="second_name" value="{{$admin->second_name}}" class="form-control"></br>
        <label>gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$admin->gender}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$admin->address}}" class="form-control"></br>
        <label>level</label></br>
        <input type="text" name="level" id="level" value="{{$admin->level}}" class="form-control"></br>
        <label>profession</label></br>
        <input type="text" name="profession" id="profession" value="{{$admin->profession}}" class="form-control"></br>
        <label>password</label></br>
        <input type="text" name="password" id="password" value="{{$admin->password}}" class="form-control"></br>
        <label>Role</label></br>
        <input type="text" name="role" id="role" value="{{$admin->role}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$admin->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 

</main>  
@endsection                                                       


