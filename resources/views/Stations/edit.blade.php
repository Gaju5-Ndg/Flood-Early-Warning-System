@extends('layout')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="card">
  <div class="card-header">Update Station </div>
  <div class="card-body">
      
      <form action="{{ url('Stations/'.$station->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>name</label></br>
        <input type="text" name="name" id="name" value="{{$station->name}}" class="form-control"></br>
        <label>district</label></br>
        <input type="text" name="district" id="district" value="{{$station->district}}" class="form-control"></br>
        <label>Managed by</label></br>
        <select name="user_id" class="form-control">
            @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
        @endforeach
       </select>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</main>
@stop