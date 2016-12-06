@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">View Tasks</div>

                <div class="panel-body">
                    
         

                   <table>
					    <tr>
					        <td>ID</td>
					        <td>Name</td>
					    </tr>

					    @foreach($tasks as $tasks)

					        <tr>
					            <td>{{ $tasks->id }}</td>
					            <td>{{ $tasks->task_name }}</td>

					        </tr>

					    @endforeach
					</table>
                </div>

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Update Tasks</div>
                	<div class="panel-body">
            			<div>
		                	<form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteTask/{id}') }}">
		                        {{ csrf_field() }}

		                        <div class="form-group">
		                            <label for="task_name" class="col-md-4 control-label">Task ID</label>

		                            <div class="col-md-6">
		                                <input id="id" type="number" class="form-control" name="id">

		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <label for="task_name" class="col-md-4 control-label">Status</label>

		                            <div class="col-md-6">
		                                <input id="status" type="text" class="form-control" name="status">

		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    <i class="fa fa-btn fa-trash"></i> Update Task
		                                </button>
		                            </div>
		                        </div>
		                    </form>
                		</div>
              		</div>
              	</div>
            <div class="panel panel-default">
                <div class="panel-heading">Delete Tasks</div>
                	<div class="panel-body">
            			<div>
		                	<form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteTask/{id}') }}">
		                        {{ csrf_field() }}

		                        <div class="form-group">
		                            <label for="task_name" class="col-md-4 control-label">Task ID</label>

		                            <div class="col-md-6">
		                                <input id="id" type="number" class="form-control" name="id">

		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    <i class="fa fa-btn fa-trash"></i> Delete Task
		                                </button>
		                            </div>
		                        </div>
		                    </form>
                		</div>
              		</div>
              	</div>
            </div>
        </div>
    </div>
</div>
@endsection