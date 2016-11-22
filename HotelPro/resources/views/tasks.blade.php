@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">View Users</div>

                <div class="panel-body">
                    
         

                   <table>
					    <tr>
					    	<td>Task</td>
					    	<td>Room Number</td>
					        <td>User ID</td>
					        <td>Employee Name</td>
					    </tr>

					    @foreach($tasks as $tasks)

					        <tr>
					        	<td>{{ $tasks->task_name }}</td>
					        	<td>{{ $tasks->room_no }}</td>
					            <td>{{ $tasks->user_id }}</td>
					            <td>{{ $tasks->user_name }}</td>
					        </tr>

					    @endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection