@extends('Admins.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Stations details</h2>
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
                {{ $station->name }} 
                {{-- {{ $admin->last_name }} --}}
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <p>district:</p>
                {{ $station->district }}
                <p>admin_id:</p>
                {{ $station->admin_id }}
            </div>
        </div>
    </div>
@endsection