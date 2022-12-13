@extends('layout')
  
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show river Users details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Stations.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Names:</strong>

                {{ $user->first_name }}  {{ $user->second_name }} 
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <p>address:</p> {{ $user->address }}
                <p>station:</p>  {{ $user->station_id }}
            </div>
        </div>
    </div>
</main>
@endsection