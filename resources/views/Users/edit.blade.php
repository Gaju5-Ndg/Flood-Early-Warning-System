@extends('layout')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="card">
  <div class="card-header">Update Users </div>
  <div class="card-body">
      
      <form action="{{ url('Users/'.$user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>First name</label></br>
        <input type="text" name="firstname" id="first_name"  class="form-control"></br>
        <label>last name</label></br>
        <input type="text" name="lastname" id="second_name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>profession </label></br>
        <input type="text" name="profession" id="profession" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Role</label></br>
        <select name="role" class="form-control">
            @foreach($roles as $role)
        <option value="{{$role->name}}">{{$role->name}}</option>
        @endforeach
       </select></br>
        <input type="submit" value="Save" class="btn btn-success" ></br>
    </form>
   
  </div>
</div>
</main>
@endsection