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
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Admins.create') }}"> Create New Admin</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" >
        <tr>
            <th>id</th>
            <th>fistName</th>
            <th>lastName</th>
            <th>address</th>
            <th>level</th>
            <th>profession</th>
            <th>role</th>
            <th width="400px">Action</th>
        </tr>
        @foreach ($admin as $item)
        <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->first_name }}</td>
        <td>{{ $item->second_name }}</td>                                     
        <td>{{ $item->address }}</td>
        <td>{{ $item->level }}</td>
        <td>{{ $item->profession }}</td>
        <td>{{ $item->role }}</td>
            <td>
            <a href="{{ url('/Admins/' . $item->id) }}" title="View "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Admins/' . $item->id . '/edit') }}" title="Edit Admins"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Admins' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete admin" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $admin->links() !!}
    
      
    </main>
@endsection
                                                                           


