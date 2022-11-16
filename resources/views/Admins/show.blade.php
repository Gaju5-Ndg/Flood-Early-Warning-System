@extends('Admins.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Admin details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Admins.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Names:</strong>
                {{ $admin->first_name }} 
                {{ $admin->last_name }}
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <p>address:</p>
                {{ $admin->address }}
                <p>gender:</p>
                {{ $admin->gender }}
                <p>mobile:</p>
                {{ $admin->mobile }}
            </div>
        </div>
    </div>
@endsection