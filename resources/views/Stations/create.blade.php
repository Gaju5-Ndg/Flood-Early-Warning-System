@extends('layout')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="card">
  <div class="card-header">Station Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Stations') }}" method="POST">
        {!! csrf_field() !!}
        <label> name</label></br>
        <input type="text" name="name" id="name"  class="form-control"></br>
        <label>district</label></br>
        <input type="text" name="district" id="district" class="form-control"></br>
        <label>Manager</label></br>
        <select name="user_id" class="form-control">
            @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
        @endforeach
       </select>
       
        <input type="submit" value="Save" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
</main>
@endsection