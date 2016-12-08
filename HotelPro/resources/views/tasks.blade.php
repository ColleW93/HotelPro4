@extends('layouts.app')

@section('content')
<style>
  

        div, a {
            font-weight: bold;
            font-size: 20px;
        }

        .buttonstyle {
            font: bold 30px Arial;
            text-decoration: none;
            background-color: #f4c8ef;
            color: #ffffff;
            padding: 10px 10px 10px 10px;
            border-top: 1px solid #e200c8;
            border-right: 1px solid #910080;
            border-bottom: 1px solid #910080;
            border-left: 1px solid #e200c8;
            
        }

        .panel-body {
            background-color: #ffffff;
            height:100%px;
            font-color: #ffffff!important;
        }

        .panel-heading {
            color: #ffffff!important;
            background-color: #000000!important;
        }

        table {
			background: #f5f5f5;
			border-collapse: separate;
			box-shadow: inset 0 1px 0 #fff;
			font-size: 20px;
			line-height: 24px;
			margin: 30px auto;
			text-align: left;
			width: 800px;
		}	

		th {
			background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
			border-left: 1px solid #555;
			border-right: 1px solid #777;
			border-top: 1px solid #555;
			border-bottom: 1px solid #333;
			box-shadow: inset 0 1px 0 #999;
			color: #fff;
		    font-weight: bold;
			padding: 10px 15px;
			position: relative;
			text-shadow: 0 1px 0 #000;	
		}

		th:after {
			background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
			content: '';
			display: block;
			height: 25%;
			left: 0;
			margin: 1px 0 0 0;
			position: absolute;
			top: 25%;
			width: 100%;
		}

		th:first-child {
			border-left: 1px solid #777;	
			box-shadow: inset 1px 1px 0 #999;
		}

		th:last-child {
			box-shadow: inset -1px 1px 0 #999;
		}

		td {
			border-right: 1px solid #fff;
			border-left: 1px solid #e8e8e8;
			border-top: 1px solid #fff;
			border-bottom: 1px solid #e8e8e8;
			padding: 10px 15px;
			position: relative;
			transition: all 300ms;
		}

		td:first-child {
			box-shadow: inset 1px 0 0 #fff;
		}	

		td:last-child {
			border-right: 1px solid #e8e8e8;
			box-shadow: inset -1px 0 0 #fff;
		}	

		tr {
			background: url(http://jackrugile.com/images/misc/noise-diagonal.png);	
		}

		tr:nth-child(odd) td {
			background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);	
		}

		tr:last-of-type td {
			box-shadow: inset 0 -1px 0 #fff; 
		}

		tr:last-of-type td:first-child {
			box-shadow: inset 1px -1px 0 #fff;
		}	

		tr:last-of-type td:last-child {
			box-shadow: inset -1px -1px 0 #fff;
		}	

		tbody:hover td {
			color: transparent;
			text-shadow: 0 0 3px #aaa;
		}

		tbody:hover tr:hover td {
			color: #444;
			text-shadow: 0 1px 0 #fff;
		}


    </style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">View Tasks</div>

                <div class="panel-body">
                    
         

                   <table>
					    <tr>
					        <th>ID</th>
					        <th>Task</th>
					        <th>Employee Name</th>
					        <th>Status</th>

					    </tr>

					    @foreach($tasks as $tasks)

					        <tr>
					            <td>{{ $tasks->id }}</td>
					            <td>{{ $tasks->task_name }}</td>
					            <td>{{ $tasks->user_name }}</td>
					            <td>{{ $tasks->status }}</td>
					        </tr>

					    @endforeach
					</table>
                </div>

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Update Tasks</div>
                	<div class="panel-body">
            			<div>
		                	<form class="form-horizontal" role="form" method="POST" action="{{ url('/updateTask/{id}') }}">
		                        <!--{{ csrf_field() }}-->

		                        <div class="form-group">
		                            <label for="id" class="col-md-4 control-label">Task ID</label>

		                            <div class="col-md-6">
		                                <input id="id" type="number" class="form-control" name="id">

		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <label for="status" class="col-md-4 control-label">Status</label>

		                            <div class="col-md-6">
		                                <input id="status" type="text" class="form-control" name="status" placeholder="Enter 'Finished' or 'Not Finished'">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="buttonstyle">
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
		                        <!--{{ csrf_field() }}-->


		                        <div class="form-group">
		                            <label for="task_name" class="col-md-4 control-label">Task ID</label>

		                            <div class="col-md-6">
		                                <input id="id" type="number" class="form-control" name="id">

		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="buttonstyle">
		                                    <i class="fa fa-btn fa-trash"></i> Delete Task
		                                </button>
		                            </div>
		                        </div>
		                    </form>

		                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/clearTasks/{id}') }}">
		                    	<div class="col-md-6 col-md-offset-4">
		                            <button type="submit" class="buttonstyle" style="margin-left: -6px!important;">
		                                <i class="fa fa-btn fa-trash"></i> Clear Database
		                            </button>
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