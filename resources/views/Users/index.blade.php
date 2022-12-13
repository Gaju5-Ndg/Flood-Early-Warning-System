@extends('layout')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
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
  
      <div class="push-left">
           
           <a class="btn btn-success" href="{{ route('Users.create') }}"> Create New User</a>
           
       </div>
            @if(Auth::user()->can("create-user"))
             <a class="btn btn-success" href="{{ route('Users.create') }}"> Create New User</a>
            @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>fistName</th>
            <th>Email</th>
            <th>Role</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user as $item)
        <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->firstname }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->role }}</td>                                        
            <td>
            <a href="{{ url('/Users/' . $item->id) }}" title="View "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Users/' . $item->id . '/edit') }}" title="Edit Users"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Users' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $user->links() !!}
      

      
    </main>
 @endsection

                                                                           