@extends('layout')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">FEWS Dashboard</h1>
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

    
      
      <div class="container-fluid px-4"style='width:'>
      <div class="card bg-primary text-white mb-4">
         <div class="card-body">
         <h2 style='align-text:center'>SEBEYA</h1>
        </div>
       <div class="card-footer d-flex align-items-center justify-content-between">
        <table class="table">
       </tr>
        <tr>
        <th  scope="col"><a href="#">temperature</a></th>
        <th   scope="col"> <a href="#">waterlevel</a></th>
        <th  scope="col"><a href="#">soil moisture</a></th>
        <tr>
        <th  scope="col">34</th>
        <th  scope="col">544</th>
        <th  scope="col">224</th>
        </tr>
        <table>
        </div>
        </div>
                              
    

                
    </main>
  @endsection