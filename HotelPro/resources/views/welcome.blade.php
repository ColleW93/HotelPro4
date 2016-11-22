@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome To The Hotel</div>

                <div class="panel-body">
                    Register new tasks or... well... there's nothing else to do yet...
                </div>
                <div class="panel-body">
                    <a href='http://localhost:8000/api/makeTask'> Register New Task</a>
                   <!-- <button type="submit" class="btn btn-primary" href="{{ url('/api/makeTask') }}">
                        <i class="fa fa-btn fa-list"></i> Register New Task
                    </button>
                    -->
                    <a href='http://localhost:8000/api/tasks'> View Tasks</a>
                    <a href='http://localhost:8000/api/users'> View Registered Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
