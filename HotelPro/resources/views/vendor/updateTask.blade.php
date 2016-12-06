@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/api/makeTask') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="task_name" class="col-md-4 control-label">Task Name</label>

                            <div class="col-md-6">
                                <input id="task_name" type="text" class="form-control" name="task_name" value="{{ old('task_name') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="room_no" class="col-md-4 control-label">Room Number</label>

                            <div class="col-md-6">
                                <input id="room_no" type="text" class="form-control" name="room_no" value="{{ old('room_no') }}">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user_id" class="col-md-4 control-label">User ID</label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user_name-confirm" class="col-md-4 control-label">User Name</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control" name="user_name">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-list"></i> Update Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
