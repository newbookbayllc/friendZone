@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') userlist :: @parent
@stop

{{-- Content --}}
@section('content')
    <div class="page-header">
        <h3>
            Users
            <div class="pull-right">
                <div class="pull-right">
                    
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
        	<th> Id </th>
            <th>User  Name</th>
            <th>Email</th>
            <th>Oragnization</th>
			<th>Read Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        		@foreach ($data as $user)
                	<tr>
                    	<td>
		                    	{{ $user->id }}
                         </td>
                          <td>
		                    	{{ $user->username}}
                         </td>
                         <td>
		                    	{{ $user->email }}
                         </td>
                         <td>
		                    	{{ $user->oragnization }}
                         </td>
                         <td>
		                    	{{ $user->read_type }}
                         </td>
                         <td>
                         		
                         </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@stop


