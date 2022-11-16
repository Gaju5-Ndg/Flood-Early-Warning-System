@extends('Admins.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin page of the EW-System</h2>
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
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>fistName</th>
            <th>lastName</th>
            <th>gender</th>
            <th>level</th>
            <th>profession</th>
            <th>password</th>
            <th>role</th>
            <th>mobile</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($admin as $item)
        <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->first_name }}</td>
        <td>{{ $item->second_name }}</td>
        <td>{{ $item->gender }}</td>                                        
        <td>{{ $item->address }}</td>
        <td>{{ $item->level }}</td>
        <td>{{ $item->profession }}</td>
        <td>{{ $item->password }}</td>
        <td>{{ $item->role }}</td>
        <td>{{ $item->mobile }}</td>
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
      
@endsection
                                                                           <td>